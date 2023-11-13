<?php

namespace App\Http\Controllers\Dashboard;


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
        $this->middleware('active_plan')->only('index', 'store', 'edit', 'update', 'destroy');
        $this->middleware('is_broker')->only('destroy');
    }
    function index()
    {
        $user = request()->brokerUser;
        $properties = $user->properties()
            ->whereDoesntHave('applications')
            ->where('is_ad', false)
            ->useFilters()
            ->get();


        return view('dashboard.properties.index', compact('properties'));
    }

    function create()
    {
        return view('dashboard.properties.create');
    }

    public function store(CreatePropertyRequest $request)
    {
        $validatedData = $request->validated();

        $property = new Property();
        $property->fill($validatedData);
        $property->user_id = request()->brokerUser->id;
        $this->propertyService->saveLocation($property, $validatedData);
        $property->save();
        $this->propertyService->insertFacilities($property, $validatedData['facilities']);
        $this->propertyService->insertFeatures($property, $validatedData['features']);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $property->addMedia($image)->toMediaCollection('images');
            }
        }
        $this->propertyService->saveLegalData($property, $validatedData);
        event(new PropertyAdded($property));

        return redirect()->route('dashboard.properties.index')
            ->with('success', 'Property created successfully.');
    }

    function edit($propertyId)
    {
        $property = request()->brokerUser->properties()->findOrFail($propertyId);
        $property->load('legalData');
        $selectedFeatures = $property->features();

        return view('dashboard.properties.edit', compact('property', 'selectedFeatures'));
    }

    function update(UpdatePropertyRequest $request, $propertyId)
    {
        $validatedData = $request->validated();
        $property = request()->brokerUser->properties()->findOrFail($propertyId);
        $property->update($validatedData);

        if (isset($validatedData['features'])) {
            $this->propertyService->deleteFeatures($property);
            $this->propertyService->insertFeatures($property, $validatedData['features']);
        }
        if (isset($validatedData['facilities'])) {
            $this->propertyService->deleteFacilities($property);
            $this->propertyService->insertFacilities($property, $validatedData['facilities']);
        }
        if ($request->hasFile('images')) {
            $property->clearMediaCollection();
            foreach ($request->file('images') as $image) {
                $property->addMedia($image)->toMediaCollection('images');
            }
        }
        $this->propertyService->saveLegalData($property, $validatedData);

        return redirect()->back();
    }

    function destroy($propertyId)
    {
        $property = request()->user()->properties()->findOrFail($propertyId);
        $property->delete();

        return back()->with('success', 'property deleted');
    }
}
// vdlt hxwj aeqs bfuk 