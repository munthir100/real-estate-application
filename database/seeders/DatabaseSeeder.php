<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StatusSeeder::class);
        $this->call(TownSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(FacilitySeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PropertyTypeSeeder::class);
    }

}
