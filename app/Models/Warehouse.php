<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['name', 'address', 'description'])]
class Warehouse extends Model
{
    use SoftDeletes;

    public function warehouseLocations(): HasMany
    {
        return $this->hasMany(WarehouseLocation::class);
    }
}
