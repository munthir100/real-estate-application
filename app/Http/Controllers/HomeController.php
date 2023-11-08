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
        $userSearchCriteria = $this->getRequestedFilters($request);
        $properties = Property::whereStatusId(Status::ACCEPTED)
            ->whereDoesntHave('applications')
            ->usePropertyFilters($userSearchCriteria)
            ->dynamicPaginate();


        return view('properties.index', compact('properties', 'userSearchCriteria'));
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


    function getRequestedFilters($request)
    {
        return [
            'location' => $request->location,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'min_square' => $request->min_square,
            'max_square' => $request->max_square,
            'bathroom' => $request->bathroom,
            'type' => $request->type,
            'category_id' => $request->category_id,
            'bedroom' => $request->bedroom,
            'city_id' => $request->city_id,
            'features' => $request->features,
        ];
    }
}
