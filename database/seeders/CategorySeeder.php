<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            'appartment',
            'villa',
            'conda',
            'house',
            'landa',
            'commertial',
            'property',
        ];

        Category::insert(array_map(function ($category) {
            return ['name' => $category];
        }, $categories));
    }
}
