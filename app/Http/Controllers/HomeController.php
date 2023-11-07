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

        $plans = null;
        if (auth()->check()) {
            if (request()->user()->isSubscriber) {
                $plans = Plan::all();
            }
        }

        return view('home', compact('properties', 'plans', 'cities'));
    }

    public function properties(Request $request)
    {
        $query = Property::whereStatusId(Status::ACCEPTED)
            ->whereDoesntHave('applications');

        // Check the 'sort_by' query parameter and set the sorting criteria accordingly
        if ($request->has('sort_by')) {
            switch ($request->input('sort_by')) {
                case 'date_asc':
                    $query->orderBy('created_at', 'asc');
                    break;
                case 'date_desc':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'name_asc':
                    $query->orderBy('title', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('title', 'desc');
                    break;
                    // Add more sorting options as needed
            }
        } else {
            // Default sorting (you can set a default sorting option here)
            $query->orderBy('created_at', 'desc');
        }

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
