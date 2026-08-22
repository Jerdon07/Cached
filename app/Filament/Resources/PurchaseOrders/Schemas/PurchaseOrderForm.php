<?php

namespace App\Filament\Resources\PurchaseOrders\Schemas;

use App\PurchaseOrderStatus;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PurchaseOrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('supplier_id')
                    ->relationship('supplier', 'id')
                    ->required(),
                TextInput::make('created_by')
                    ->numeric(),
                TextInput::make('approved_by')
                    ->numeric(),
                DatePicker::make('order_date')
                    ->required(),
                DatePicker::make('expected_delivery_date')
                    ->required(),
                Select::make('status')
                    ->options(PurchaseOrderStatus::class)
                    ->default('draft')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
                DatePicker::make('approved_at'),
            ]);
    }
}
