<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Hardware'],
            ['name' => 'Electrical'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }

        Category::factory(5);
    }
}
