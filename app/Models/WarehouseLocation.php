<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['warehouse_id', 'zone', 'aisle', 'rack', 'shelf', 'bin', 'description'])]
class WarehouseLocation extends Model
{
    public function Warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
}
