<?php

namespace Database\Seeders;

use App\Models\PurchaseOrder;
use App\PurchaseOrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseOrderSeeder extends Seeder
{
    public function run(): void
    {
        PurchaseOrder::firstOrCreate(
            ['po_number' => 'PO-2026-0001'],
            [
                'supplier_id' => 1,
                'order_date' => now(),
                'expected_delivery_date' => now()->addDays(3),
                'status' => PurchaseOrderStatus::Pending,
                'remarks' => 'A nice purchase order from a supplier.',
                'created_by' => 'Zuck Muckerberg',
                'approved_by' => 'Elong Mah',
                'approved_at' => now()->addHour(),
            ]
        );
    }
}
