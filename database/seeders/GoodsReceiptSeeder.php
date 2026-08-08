<?php

namespace Database\Seeders;

use App\Models\GoodsReceipt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoodsReceiptSeeder extends Seeder
{
    public function run(): void
    {
        GoodsReceipt::firstOrCreate([
            'receipt_number' => 1,
        ], [
            'purchase_order_id' => 1,
            'received_date' => now(),
            'received_by' => 'Hussain Binladen',
            'remarks' => 'nice goods receipt from this purchase order.'
        ]);
    }
}
