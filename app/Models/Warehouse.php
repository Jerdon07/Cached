<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'address', 'description'])]
class Warehouse extends Model
{
    public function WarehouseLocations(): HasMany
    {
        return $this->hasMany(WarehouseLocation::class);
    }
}
