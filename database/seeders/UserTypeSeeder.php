<?php

namespace Database\Seeders;

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // User Types
        $userTypes = [
            ['name' => 'Subscriber'],
            ['name' => 'Browser'],
            ['name' => 'Admin'],
        ];

        // Insert seed data
        UserType::insert($userTypes);
    }
}
