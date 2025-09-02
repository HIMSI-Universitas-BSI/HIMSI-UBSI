<?php

namespace App\Filament\Resources\Recrutments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RecrutmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nim')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('semester')
                    ->required(),
                TextInput::make('ektm')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('instagram')
                    ->required(),
                TextInput::make('no_wa')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('branch_id')
                    ->required()
                    ->numeric(),
                TextInput::make('follow_dpc')
                    ->required(),
                TextInput::make('cv'),
                TextInput::make('status_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
