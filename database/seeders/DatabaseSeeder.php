<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,

            CategorySeeder::class,
            BrandSeeder::class,
            UnitSeeder::class,

            SupplierSeeder::class,
            CustomerSeeder::class,

            WarehouseSeeder::class,
            WarehouseLocationSeeder::class,

            ProductSeeder::class,
            ProductSupplierSeeder::class,

            PurchaseOrderSeeder::class,
        ]);
    }
}
