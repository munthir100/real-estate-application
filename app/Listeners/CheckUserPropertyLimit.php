<?php

namespace App\Listeners;

use App\Events\PropertyAdded;
use App\Models\AgentProperty;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckUserPropertyLimit
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(PropertyAdded $event)
    {
        $property = $event->property;

        $user = $property->user;
        $subscribedPlan = $user->plan;
        $plan = $subscribedPlan->plan;

        $propertyLimit = $plan->num_properties_allowed; // Set the maximum number of properties
        if ($user->properties->count() >= $propertyLimit) {
            $subscribedPlan->delete();
        }
        if (request()->has('agent')) {
            AgentProperty::create([
                'property_id' => $property->id,
                'agent_id' => request()->agent->id,
            ]);
        }
    }
}
