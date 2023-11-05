<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        $properties = Property::useFilters()
            ->dynamicPaginate();

        $plans = null;
        if (auth()->check()) {
            if (request()->user()->isSubscriber) {
                $plans = Plan::all();
            }
        }

        return view('home', compact('properties', 'plans'));
    }
}
// whereHas('temporaryAd')
//             ->whereHas('featuredAd')