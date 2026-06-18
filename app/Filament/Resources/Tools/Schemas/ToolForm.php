<?php

namespace App\Filament\Resources\Tools\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ToolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, callable $set) => 
                        $operation === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null
                    ),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_free')
                    ->required()
                    ->default(true),
                TextInput::make('price')
                    ->numeric()
                    ->prefix('$'),
                Select::make('product_id')
                    ->relationship('product', 'title')
                    ->nullable()
                    ->placeholder('Select a Product to link for paid checkout flow')
                    ->helperText('Required if tool is not free'),
                TextInput::make('view_component'),
            ]);
    }
}
