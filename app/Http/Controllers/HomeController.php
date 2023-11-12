<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Plan;
use App\Models\User;
use App\Models\Status;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\PropertyFeature;
use App\Models\UserType;

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

    function applications(Request $request)
    {
        $userSearchCriteria = $this->getRequestedFilters($request);
        $properties = Property::whereStatusId(Status::ACCEPTED)
            ->whereHas('applications')
            ->usePropertyFilters($userSearchCriteria)
            ->dynamicPaginate();

        return view('properties.applications.index', compact('properties', 'userSearchCriteria'));
    }

    function propertyDetails(Property $property)
    {
        if ($property->status_id != Status::ACCEPTED) {
            abort(404);
        }
        $property->load('features', 'location', 'facilities');


        return view('properties.show', compact('property'));
    }

    function agents()
    {
        $broker = request()->user()->broker()->first();
        $agents = $broker->agents()->get();

        return view('agents.index', compact('agents'));
    }

    function agentDetails($agentId)
    {
        $broker = request()->user()->broker()->first();
        $agent = $broker->agents()->findOrFail($agentId)->with('user')->first();

        return view('agents.show', compact('agent'));
    }

    function brokers()
    {
        $users = User::where('user_type_id', UserType::BROKER)->get();

        return view('brokers.index', compact('users'));
    }

    function brokerDetails($userId)
    {
        $user = User::where('user_type_id', UserType::BROKER)->with('properties','broker')->findOrFail($userId);
        return view('brokers.show', compact('user'));
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
            'date_asc' => $request->date_asc,
            'date_desc' => $request->date_desc,
            'price_asc' => $request->price_asc,
            'price_desc' => $request->price_desc,
            'name_asc' => $request->name_asc,
            'name_desc' => $request->name_desc,
            'sort_by' => $request->name_desc,
        ];
    }
}
