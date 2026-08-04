<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            ['name' => 'Adidas'],
            ['name' => 'Nike'],
        ];

        foreach ($brands as $brand) {
            Brand::firstOrCreate($brand);
        }
    }
}
