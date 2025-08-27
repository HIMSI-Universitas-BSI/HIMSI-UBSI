<?php

namespace App\Filament\Resources\Divisions\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DivisionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('logo')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('division_logo')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('division_image')
                    ->columnSpanFull()
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Repeater::make('job_description')
                    ->schema([
                        TextInput::make('job')->required(),
                    ])
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('active')
                    ->required(),
            ]);
    }
}
