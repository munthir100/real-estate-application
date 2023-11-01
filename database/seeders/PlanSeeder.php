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
                'num_ads_allowed' => 10,
                'num_temp_ads' => 5,
                'num_distinctive_ads' => 2,
                'priority_support' => 0,
                'num_affiliate_users' => 0,
                'include_ologo' => true,
            ],
            [
                'name' => 'Standard Plan',
                'price' => 19.99,
                'duration' => 60,
                'num_ads_allowed' => 20,
                'num_temp_ads' => 10,
                'num_distinctive_ads' => 5,
                'priority_support' => 1,
                'num_affiliate_users' => 5,
                'include_ologo' => true,
            ],
            [
                'name' => 'Premium Plan',
                'price' => 29.99,
                'duration' => 90,
                'num_ads_allowed' => 30,
                'num_temp_ads' => 15,
                'num_distinctive_ads' => 10,
                'priority_support' => 2,
                'num_affiliate_users' => 10,
                'include_ologo' => true,
            ],
        ];

        // Insert seed data
        Plan::insert($plans);
    }
}
