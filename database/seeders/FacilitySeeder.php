<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    public function run()
    {
        // Facility names
        $facilities = [
            'Hospital',
            'Supermarket',
            'School',
            'Entertainment',
            'Pharmacy',
            'Airport',
            'Railways',
            'Bus Station',
            'Beach',
            'Shopping Mall',
            'Bank',
        ];

        // Insert seed data
        foreach ($facilities as $facility) {
            Facility::create(['name' => $facility]);
        }
    }
}
