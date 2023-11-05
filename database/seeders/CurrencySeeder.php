<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            ['name' => 'doller', 'code' => '$'],
            ['name' => 'saudi real', 'code' => 'SAR'],
        ];

        // Insert seed data
        Currency::insert($currencies);
    }
}
