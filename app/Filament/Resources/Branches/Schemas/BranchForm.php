<?php

namespace App\Filament\Resources\Branches\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class BranchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('location')
                    ->required(),
                Select::make('sektor')
                    ->options([
                        'sektor_barat' => 'Sektor Barat',
                        'sektor_tengah' => 'Sektor Tengah',
                        'sektor_timur' => 'Sektor Timur',
                    ])
                    ->required(),
                TextInput::make('instagram')
                    ->required(),
                TextInput::make('grup_wa')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('poster')
                    ->image()
                    ->disk('himsi')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Toggle::make('active')
                    ->required(),
            ]);
    }
}
