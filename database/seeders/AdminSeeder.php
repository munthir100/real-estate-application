<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'first_name' => 'admin',
            'last_name' => 'user',
            'email' => 'admin@test.com',
            'username' => 'admin test',
            'phone' => '0123456789',
            'gender' => 'male',
            'birth_date' => now(),
            'password' => '0123456789',
            'user_type_id' => UserType::ADMIN
        ];

        $user = User::create($user);
        $user->admin()->create();
    }
}










