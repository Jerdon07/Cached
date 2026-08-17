<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['company_name', 'contact_person', 'phone', 'email', 'address', 'city', 'province', 'postal_code'])]
class Customer extends Model
{
    use HasFactory;

    public function salesOrders(): HasMany
    {
        return $this->hasMany(SalesOrder::class);
    }
}
