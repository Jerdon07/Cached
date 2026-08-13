<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('sku')
                    ->placeholder('-'),
                TextEntry::make('barcode'),
                TextEntry::make('category.name'),
                TextEntry::make('brand.name'),
                TextEntry::make('unit.abbrevation'),
                TextEntry::make('selling_price')
                    ->money('PHP'),
                TextEntry::make('minimum_stock')
                    ->numeric(),
                IconEntry::make('is_active'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Product $record): bool => $record->trashed()),
            ]);
    }
}
