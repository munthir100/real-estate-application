<?php

namespace App\Http\Controllers\admin;

use App\Models\City;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Facility;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Status;

class PropertiesController extends Controller
{
    function index()
    {
        $properties = Property::whereDoesntHave('applications')
            ->useFilters()
            ->get();

        return view('admin.properties.index', compact('properties'));
    }

    function edit(Property $property)
    {

        $cities = City::all();
        $currencies = Currency::all();
        $categories = Category::all();
        $features = Feature::all();
        $facilities = Facility::all();
        $selectedFeatures = $property->features();

        return view('admin.properties.edit', compact('property', 'cities', 'currencies', 'categories', 'features', 'facilities', 'selectedFeatures'));
    }

    function accept(Property $property)
    {
        $property->status_id = Status::ACCEPTED;
        $property->save();

        return redirect()->back();
    }
    function reject(Property $property)
    {
        $property->status_id = Status::REJECTED;
        $property->save();

        return redirect()->back();
    }
    function delete(Property $property)
    {
        $property->delete();

        return to_route('admin.properties.index');
    }
}
