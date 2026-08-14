<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->helperText('Enter product name'),
                TextInput::make('sku')
                    ->label('Stock Keeping Unit (SKU)')
                    ->maxLength(255)
                    ->helperText('Enter SKU'),
                TextInput::make('barcode')
                    ->helperText('Enter barcode')
                    ->maxLength(255),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable()
                    ->noSearchResultsMessage('No categories found.')
                    ->preload()
                    ->helperText('Select category'),
                Select::make('brand_id')
                    ->relationship('brand', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->helperText('Select brand'),
                Select::make('unit_id')
                    ->relationship('unit', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->helperText('Select unit of measurement'),
                TextInput::make('selling_price')
                    ->required()
                    ->numeric()
                    ->prefix('₱')
                    ->minValue(0)
                    ->helperText('Enter selling price'),
                TextInput::make('minimum_stock')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->default(0)
                    ->helperText('Enter minimum stock'),
                Toggle::make('is_active')
                    ->default(true)
                    ->onColor('success')
                    ->offColor('danger')
                    ->helperText('Check if active'),
                Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
