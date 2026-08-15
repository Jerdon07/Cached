<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class SupplierInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('company_name')
                    ->icon(Heroicon::HomeModern),
                TextEntry::make('contact_person')
                    ->icon(Heroicon::User),
                TextEntry::make('phone')
                    ->icon(Heroicon::Phone),
                TextEntry::make('email')
                    ->icon(Heroicon::AtSymbol),
                TextEntry::make('address')
                    ->icon(Heroicon::MapPin),
                TextEntry::make('city')
                    ->icon(Heroicon::MapPin),
                TextEntry::make('province')
                    ->icon(Heroicon::MapPin),
                TextEntry::make('postal_code')
                    ->icon(Heroicon::MapPin),
                TextEntry::make('remarks')
                    ->columnSpanFull()
                    ->placeholder('-')
                    ->icon(Heroicon::InformationCircle),
            ]);
    }
}
