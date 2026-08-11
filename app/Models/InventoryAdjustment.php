<?php

namespace App\Models;

use App\InventoryAdjustmentReason;
use App\InventoryAdjustmentStatus;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['adjustment_number', 'reason', 'status', 'created_by', 'approved_by', 'approved_at', 'notes'])]
class InventoryAdjustment extends Model
{
    protected function casts(): array
    {
        return [
            'reason' => InventoryAdjustmentReason::class,
            'status' => InventoryAdjustmentStatus::class,
            'approved_at' => 'date',
        ];
    }
}
