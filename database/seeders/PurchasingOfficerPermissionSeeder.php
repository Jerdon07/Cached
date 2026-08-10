<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchasingOfficerPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $purchasingOfficer = Role::where('name', 'Purchasing Officer')->firstOrFail();
        
        $purchasingOfficer->permissions()->sync(
            Permission::whereIn('name', [
                'product_view_any',
                'products_view',
                'categories_view_any',
                'products_view',
                
                'suppliers_view_any',
                'suppliers_view',
                'suppliers_create',
                'suppliers_update',
                'suppliers_delete',
                'suppliers_delete_any',

                'purchase_orders_view_any',
                'purchase_orders_view',
                'purchase_orders_create',
                'purchase_orders_update',
                'purchase_orders_delete',
                'purchase_orders_delete_any',

                'purchase_order_items_view_any',
                'purchase_order_items_view',
                'purchase_order_items_create',
                'purchase_order_items_update',
                'purchase_order_items_delete',
                'purchase_order_items_delete_any',

                'goods_receipts_view_any',
                'goods_receipts_view',

                'warehouses_view_any',
                'warehouses_view',

                'warehouse_locations_view_any',
                'warehouse_locations_view',

                'stock_movements_view_any',
                'stock_movements_view',
            ])
        );
    }
}
