<?php

namespace App\Models;

use App\SalesOrderStatus;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['customer_id', 'order_date', 'status'])]
class SalesOrder extends Model
{
    protected function casts(): array
    {
        return [
            'order_date' => 'date',
            'status' => SalesOrderStatus::class,
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
