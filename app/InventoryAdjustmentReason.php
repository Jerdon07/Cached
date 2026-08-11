<?php

namespace App;

enum InventoryAdjustmentReason: string
{
    case Damaged = 'damaged';
    case Lost = 'lost';
    case Found = 'found';
    case Expired = 'expired';
    case Theft = 'theft';
    case CountDiscrepancy = 'count_discrepancy';
    case DataEntryError = 'data_entry_error';
    case SystemError = 'system_error';
    case Other = 'other';

    public function label(): string
    {
        return match ($this) {
            self::Damaged => 'Products were physically damaged',
            self::Lost => 'Products cannot be located',
            self::Found => 'Previously missing products were discovered',
            self::Expired => 'Expired products are removed',
            self::Theft => 'Products were confirmed stolen',
            self::CountDiscrepancy => 'Physical count differs from system quantity',
            self::DataEntryError => 'Someone entered the wrong quantity',
            self::SystemError => 'A system problem caused incorrect stock',
            self::Other => 'Anything not covered above',
        };
    }
}
