<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Services\PlanService;

class PlanController extends Controller
{
    public $planService;
    function __construct(PlanService $planService)
    {
        $this->planService = $planService;
    }

    function index()
    {
        $plans = Plan::all();

        return view('plans.index', compact('plans'));
    }
    public function subscribe(Plan $plan)
    {
        $user = request()->user();
        $this->planService->subscribeUserToPlan($plan, $user, 30);

        return back()->with('success', 'User subscribed to the plan successfully');
    }
}
