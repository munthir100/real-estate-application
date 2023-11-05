<?php

namespace App\Listeners;

use App\Events\PropertyAdded;
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

        // Define your property limit logic here (e.g., maximum number of properties allowed)
        $propertyLimit = $plan->num_properties_allowed; // Set the maximum number of properties

        // Check if the user has reached the maximum number of properties
        if ($user->properties->count() >= $propertyLimit) {
            // User has reached the property limit, so delete the active plan
            $subscribedPlan->delete();
        }
    }
}
