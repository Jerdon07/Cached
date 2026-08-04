<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $resources = [
            'users',
            'roles',
            'products',
            'categories',
            'brands',
            'units',
            'suppliers',
            'customers',
            'warehouses',
            'warehouse_locations',
            'purchase_orders',
            'purchase_order_items',
            'goods_receipts',
            'sales_orders',
            'sales_order_items',
            'stock_movements',
            'inventory_adjustments',
            'audit_logs',
        ];

        $actions = [
            'view_any',
            'view',
            'create',
            'update',
            'delete',
            'delete_any',
            'restore',
            'restore_any',
            'force_delete',
            'force_delete_any',
        ];

        foreach ($resources as $resource) {
            foreach ($actions as $action) {
                Permission::firstOrCreate([
                    'name' => "{$action}_{$resource}",
                ]);
            }
        }

        $customPermissions = [
            // Purchase Orders
            'approve_purchase_orders',
            'reject_purchase_orders',
            'send_purchase_orders',
            'close_purchase_orders',

            // Goods Receiving
            'receive_goods',

            // Inventory
            'adjust_inventory',
            'count_inventory',
            'transfer_stock',

            // Sales
            'approve_sales_orders',
            'cancel_sales_orders',

            // Reports
            'view_reports',
            'export_reports',

            // Dashboard
            'view_dashboard',

            // Audit
            'view_activity_logs',

            // Notifications
            'manage_notifications',
        ];

        foreach ($customPermissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
            ]);
        }
    }
}
