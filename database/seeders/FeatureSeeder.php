<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            'Wifi',
            'Parking',
            'Swimming Pool',
            'Balcony',
            'Garden',
            'Security',
            'Fitness Center',
            'Air Conditioning',
            'Central Heating',
            'Laundry Room',
            'Pets Allow',
        ];

        foreach ($features as $featureName) {
            Feature::create([
                'name' => $featureName,
            ]);
        }
    }
}
