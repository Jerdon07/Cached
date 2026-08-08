<?php

namespace App;

enum PurchaseOrderStatus: string
{
    case Draft = 'draft';
    case Pending = 'pending';
    case Approved = 'approved';
    case Cancelled = 'cancelled';
    case Completed = 'completed';

    public function label(): string
    {
        return match ($this) {
            self::Draft => 'Draft',
            self::Pending => 'Pending',
            self::Approved => 'Approved',
            self::Cancelled => 'Cancelled',
            self::Completed => 'Completed',
        };
    }
}
