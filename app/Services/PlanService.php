<?php

namespace App\Services;

use App\Models\UserPlan;

class PlanService
{
    function subscribeUserToPlan($plan, $user)
    {
        UserPlan::create([
            'user_id' => $user->id,
            'plan_id' => $plan->id,
        ]);
    }
}
