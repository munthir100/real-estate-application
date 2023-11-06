<?php

namespace App\Http\Controllers;

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
        $properties = Property::whereStatusId(Status::ACCEPTED)
            ->whereDoesntHave('applications')
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
        $property->load('features','location','facilities');


        return view('properties.show', compact('property'));
    }
}
