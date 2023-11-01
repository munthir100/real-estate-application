<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Town;

class TownSeeder extends Seeder
{
    public function run()
    {
        // Towns
        $towns = [
            ['name' => 'Town 1'],
            ['name' => 'Town 2'],
            ['name' => 'Town 3'],
            // Add more towns as needed
        ];

        // Insert seed data
        Town::insert($towns);
    }
}
