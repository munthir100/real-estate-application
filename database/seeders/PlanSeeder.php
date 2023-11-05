<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run()
    {
        // Plans
        $plans = [
            [
                'name' => 'Basic Plan',
                'price' => 10.99,
                'duration' => 30,
                'num_properties_allowed' => 3,
                'priority_support' => 0,
                'num_affiliate_users' => 0,
            ],
            [
                'name' => 'Standard Plan',
                'price' => 19.99,
                'duration' => 60,
                'num_properties_allowed' => 10,
                'priority_support' => 1,
                'num_affiliate_users' => 5,
            ],
            [
                'name' => 'Premium Plan',
                'price' => 29.99,
                'duration' => 90,
                'num_properties_allowed' => 10,
                'priority_support' => 2,
                'num_affiliate_users' => 10,
            ],
        ];

        // Insert seed data
        Plan::insert($plans);
    }
}
