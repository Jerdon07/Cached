<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['company_name', 'contact_person', 'phone', 'email', 'address', 'city', 'province', 'postal_code', 'remarks'])]
class Supplier extends Model
{
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)
            ->withPivot([
                'supplier_sku',
                'cost_price',
                'preferred',
            ]);
    }
}
