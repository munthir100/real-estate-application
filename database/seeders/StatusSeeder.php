<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    public function run()
    {
        // Statuses
        $statuses = [
            ['name' => 'PUBLISHED'],
            ['name' => 'PENDING'],
            ['name' => 'REJECTED'],
            // Add more statuses as needed
        ];

        // Insert seed data
        Status::insert($statuses);
    }
}
