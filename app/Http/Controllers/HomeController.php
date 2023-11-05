<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Property;
use App\Models\Status;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        $properties = Property::where('status_id', Status::ACCEPTED)->useFilters()->dynamicPaginate();

        $plans = null;
        if (auth()->check()) {
            if (request()->user()->isSubscriber) {
                $plans = Plan::all();
            }
        }

        return view('home', compact('properties', 'plans'));
    }

    function properties()
    {
        $properties = Property::whereStatusId(Status::ACCEPTED)->useFilters()->dynamicPaginate();

        return view('properties.index', compact('properties'));
    }

    function propertyDetails(Property $property)
    {
        return view('properties.show', compact('property'));
    }
}
