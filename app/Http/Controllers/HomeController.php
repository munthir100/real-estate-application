<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Plan;
use App\Models\Property;
use App\Models\PropertyFeature;
use App\Models\Status;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        $properties = Property::whereStatusId(Status::ACCEPTED)
            ->where('is_ad', true)
            ->useFilters()
            ->dynamicPaginate();

        $cities = City::take(6)
            ->withCount('properties')
            ->get();


        $plans = Plan::all();


        return view('home', compact('properties', 'plans', 'cities'));
    }

    public function properties(Request $request)
    {
        // Start with the base query
        $query = Property::whereStatusId(Status::ACCEPTED)
            ->whereDoesntHave('applications');

        // Apply filters based on form inputs
        if ($request->location) {
            $query->join('locations', 'properties.location_id', '=', 'locations.id')
                ->where('locations.name', 'like', '%' . $request->input('location') . '%');
        }

        if ($request->min_price) {
            $query->where('price', '>=', (int) $request->input('min_price'));
        }
        if ($request->max_price) {
            $query->where('price', '<=', (int) $request->input('max_price'));
        }


        if ($request->category_id) {
            $query->where('property_type_id', $request->input('category_id'));
        }

        if ($request->bedroom) {
            $query->where('number_of_bedrooms', $request->input('bedroom'));
        }

        if ($request->city_id) {
            $query->where('city_id', $request->input('city_id'));
        }

        // Sorting logic (similar to your existing code)

        $properties = $query->useFilters()->dynamicPaginate();
        $propertiesCount = $properties->total(); // Calculate the total count

        return view('properties.index', compact('properties'));
    }





    function cityProperties($cityName)
    {
        $city = City::where('name', $cityName)->withCount('properties')->firstOrFail();
        $properties = $city->properties()
            ->useFilters()
            ->dynamicPaginate();

        return view('properties.index', compact('properties'));
    }

    function applications()
    {
        $properties = Property::whereStatusId(Status::ACCEPTED)
            ->whereHas('applications')
            ->useFilters()
            ->dynamicPaginate();

        return view('properties.applications.index', compact('properties'));
    }

    function propertyDetails(Property $property)
    {
        if ($property->status_id != Status::ACCEPTED) {
            abort(404);
        }
        $property->load('features', 'location', 'facilities');


        return view('properties.show', compact('property'));
    }
}
