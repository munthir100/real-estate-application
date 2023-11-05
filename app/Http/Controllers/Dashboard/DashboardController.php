<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    function index()
    {
        $properties = request()->user()->properties()->useFilters()->dynamicPaginate();

        return view('dashboard.home',compact('properties'));
    }
}