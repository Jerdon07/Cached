<?php

namespace App\Models;

use App\PurchaseOrderStatus;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['supplier_id', 'po_number', 'order_date', 'expected_delivery_date', 'status', 'remarks', 'created_by', 'approved_by', 'approved_at'])]
class PurchaseOrder extends Model
{
    protected function casts(): array
    {
        return [
            'order_date' => 'date',
            'expected_delivery_date' => 'date',
            'status' => PurchaseOrderStatus::class,
            'approved_at' => 'date'
        ];
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(PurchaseOrderItem::class);
    }

    public function goodsReceipt(): HasMany
    {
        return $this->hasMany(GoodsReceipt::class);
    }
}
