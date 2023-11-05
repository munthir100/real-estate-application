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
use Illuminate\Http\Request;
use App\Services\PropertyService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Properties\CreatePropertyRequest;

class ApplicationsController extends Controller
{
    protected $propertyService;

    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
    }

    function index()
    {
        $user = request()->user();
        $properties = $user->properties()
            ->whereHas('applications')
            ->useFilters()
            ->get();

        return view('dashboard.applications.index', compact('properties'));
    }


    function create()
    {
        $cities = City::all();
        $currencies = Currency::all();
        $categories = Category::all();
        $features = Feature::all();
        $facilities = Facility::all();

        return view('dashboard.applications.create', compact('cities', 'currencies', 'categories', 'features', 'facilities'));
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
        $property->applications()->create(); // create the allication

        if (isset($validatedData['facilities'])) {
            $this->propertyService->insertFacilities($property, $validatedData['facilities']);
        }
        if (isset($validatedData['features'])) {
            $this->propertyService->insertFeatures($property, $validatedData['features']);
        }

        return redirect()->route('dashboard.applications.index')
            ->with('success', 'Property created successfully.');
    }
}
