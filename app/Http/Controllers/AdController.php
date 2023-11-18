<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Status;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Facility;
use App\Models\Location;
use App\Models\Property;
use App\Services\PropertyService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Properties\CreatePropertyRequest;
use App\Http\Requests\Properties\UpdatePropertyRequest;

class AdController extends Controller
{
    protected $propertyService;

    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
        $this->middleware('active_plan')->only('store', 'update', 'destroy');
    }
    function index()
    {
        $user = request()->user();
        $properties = $user->properties()
            ->whereDoesntHave('applications')
            ->where('is_ad', true)
            ->useFilters()
            ->get();


        return view('dashboard.ads.index', compact('properties'));
    }

    function create()
    {
        $cities = City::all();
        $currencies = Currency::all();
        $categories = Category::all();
        $features = Feature::all();
        $facilities = Facility::all();
        return view('dashboard.ads.create', compact('cities', 'currencies', 'categories', 'features', 'facilities'));
    }

    public function store(CreatePropertyRequest $request)
    {
        $this->middleware('active_plan');
        $validatedData = $request->validated();

        $property = new Property();
        $property->fill($validatedData);
        $property->user_id = auth()->user()->id;
        $property->status_id = Status::PENDING;

        $location = Location::create([
            'name' => $validatedData['location'],
            'longitude' => $validatedData['longitude'],
            'latitude' => $validatedData['latitude'],
        ]);

        $property->location()->associate($location);
        $property->is_ad = true;
        $property->save();

        if (isset($validatedData['facilities'])) {
            $this->propertyService->insertFacilities($property, $validatedData['facilities']);
        }
        if (isset($validatedData['features'])) {
            $this->propertyService->insertFeatures($property, $validatedData['features']);
        }

        return redirect()->route('dashboard.ads.index')
            ->with('success', __('Property created successfully'));
    }

    function edit(Property $property)
    {
        $cities = City::all();
        $currencies = Currency::all();
        $categories = Category::all();
        $features = Feature::all();
        $facilities = Facility::all();
        $selectedFeatures = $property->features();

        return view('dashboard.ads.edit', compact('property', 'cities', 'currencies', 'categories', 'features', 'facilities', 'selectedFeatures'));
    }

    function update(UpdatePropertyRequest $request, Property $property)
    {
        $validatedData = $request->validated();
        $property->update($validatedData);

        if (isset($validatedData['features'])) {
            $this->propertyService->deleteFeatures($property);
            $this->propertyService->insertFeatures($property, $validatedData['features']);
        }

        return redirect()->back();
    }

    function destroy($propertyId)
    {
        $property = request()->user()->properties()->findOrFail($propertyId);
        $property->delete();

        return back()->with('success', __('property deleted'));
    }
}
