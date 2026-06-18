<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->searchable(),
                Select::make('product_id')
                    ->relationship('product', 'title')
                    ->required()
                    ->searchable(),
                TextInput::make('reference_code')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('amount')
                    ->required()
                    ->numeric()
                    ->prefix('₦'),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'cancelled' => 'Cancelled',
                        'expired' => 'Expired',
                    ])
                    ->default('pending'),
                Select::make('confirmed_by')
                    ->relationship('confirmedBy', 'name')
                    ->nullable()
                    ->searchable()
                    ->visible(fn ($get) => $get('status') === 'paid'),
                DateTimePicker::make('paid_at')
                    ->nullable(),
                SpatieMediaLibraryFileUpload::make('proof_of_payment')
                    ->collection('proof_of_payment')
                    ->columnSpanFull(),
            ]);
    }
}
