<?php

namespace App\Models;

use App\StockTransferStatus;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['from_warehouse_id', 'to_warehouse_id', 'status', 'requested_by', 'approved_by'])]
class StockTransfer extends Model
{
    protected function casts(): array
    {
        return [
            'status' => StockTransferStatus::class,
        ];
    }

    public function fromWarehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function toWarehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function requestedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function item(): HasMany
    {
        return $this->hasMany(StockTransferItem::class);
    }

    public function getTransferNumberAttribute(): string
    {
        return 'TR-' . str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }
}
