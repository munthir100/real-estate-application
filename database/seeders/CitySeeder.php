<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    public function run()
    {
        // Cities
        $cities = [
            ['name' => 'City 1', 'town_id' => 1], // Associate with Town 1
            ['name' => 'City 2', 'town_id' => 2], // Associate with Town 2
            ['name' => 'City 3', 'town_id' => 1], // Associate with Town 1
            ['name' => 'City 4', 'town_id' => 1], // Associate with Town 1
            ['name' => 'City 5', 'town_id' => 1], // Associate with Town 1
            ['name' => 'City 6', 'town_id' => 1], // Associate with Town 1
            // Add more cities as needed
        ];

        // Insert seed data
        City::insert($cities);
    }
}

