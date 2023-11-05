<?php

namespace App\Http\Controllers\Properties;

use App\Models\City;
use App\Models\Status;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Facility;
use App\Models\Location;
use App\Models\Property;
use App\Events\PropertyAdded;
use App\Services\PlanService;
use App\Services\PropertyService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Properties\CreatePropertyRequest;
use App\Http\Requests\Properties\UpdatePropertyRequest;

class PropertiesController extends Controller
{
    protected $propertyService, $planService;

    public function __construct(PropertyService $propertyService, PlanService $planService)
    {
        $this->propertyService = $propertyService;
        $this->planService = $planService;
        $this->middleware('active_plan')->only('store', 'update', 'destroy');
    }
    function index()
    {
        $user = request()->user();
        $properties = $user->properties()
            ->whereDoesntHave('applications')
            ->where('is_ad', false)
            ->useFilters()
            ->get();


        return view('dashboard.properties.index', compact('properties'));
    }

    function create()
    {
        $cities = City::all();
        $currencies = Currency::all();
        $categories = Category::all();
        $features = Feature::all();
        $facilities = Facility::all();
        return view('dashboard.properties.create', compact('cities', 'currencies', 'categories', 'features', 'facilities'));
    }

    public function store(CreatePropertyRequest $request)
    {


        $validatedData = $request->validated();

        $property = new Property();
        $property->fill($validatedData);
        $property->user_id = auth()->user()->id; // Default to the authenticated user
        $property->status_id = Status::PENDING; // Default to 'pending' status

        $location = Location::create([
            'name' => $validatedData['location'],
            'longitude' => $validatedData['longitude'],
            'latitude' => $validatedData['latitude'],
        ]);

        $property->location()->associate($location);
        $property->save();

        if (isset($validatedData['facilities'])) {
            $this->propertyService->insertFacilities($property, $validatedData['facilities']);
        }
        if (isset($validatedData['features'])) {
            $this->propertyService->insertFeatures($property, $validatedData['features']);
        }

        event(new PropertyAdded($property));

        return redirect()->route('dashboard.properties.index')
            ->with('success', 'Property created successfully.');
    }

    function edit($propertyId)
    {
        $property = request()->user()->properties()->findOrFail($propertyId);
        $cities = City::all();
        $currencies = Currency::all();
        $categories = Category::all();
        $features = Feature::all();
        $facilities = Facility::all();
        $selectedFeatures = $property->features();

        return view('dashboard.properties.edit', compact('property', 'cities', 'currencies', 'categories', 'features', 'facilities', 'selectedFeatures'));
    }

    function update(UpdatePropertyRequest $request, $propertyId)
    {
        $validatedData = $request->validated();
        $property = request()->user()->properties()->findOrFail($propertyId);
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

        return back()->with('success', 'property deleted');
    }
}
