<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\Branch;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                Select::make('branch_id')
                    ->options(Branch::all()->pluck('name', 'id'))
                    ->visible(auth()->id() === 1),
                Select::make('position')
                    ->options(['DPP' => 'DPP', 'DPC' => 'DPC'])
                    ->visible(auth()->id() === 1),
                TextInput::make('password')
                    ->password()
                    ->revealable()
                    ->required(),
            ]);
    }
}
