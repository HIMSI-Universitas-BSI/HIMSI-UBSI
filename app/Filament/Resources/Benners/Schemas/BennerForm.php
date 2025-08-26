<?php

namespace App\Filament\Resources\Benners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BennerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(128),
                TextInput::make('position')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(128),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->columnSpanFull()
                    ->directory('benner')
                    ->required(),
                Toggle::make('active')
                    ->required(),
            ]);
    }
}
