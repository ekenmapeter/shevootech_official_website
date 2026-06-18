<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
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
                TextInput::make('client_name'),
                TagsInput::make('stack')
                    ->separator(','),
                Textarea::make('description')
                    ->columnSpanFull(),
                Toggle::make('featured')
                    ->default(false),
                FileUpload::make('screenshots')
                    ->multiple()
                    ->image()
                    ->directory('portfolio-screenshots')
                    ->columnSpanFull(),
                TextInput::make('live_url')
                    ->url(),
            ]);
    }
}
