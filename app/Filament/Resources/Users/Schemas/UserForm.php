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
                    ->label('Cabang / DPC')
                    ->visible(in_array(auth()->user()->roles->first()->id ?? null, [1, 4])),
                Select::make('position')
                    ->options(['DPP' => 'DPP', 'DPC' => 'DPC'])
                    ->label('Posisi')
                    ->visible(in_array(auth()->user()->roles->first()->id ?? null, [1, 4])),
                Select::make('roles')
                    ->label('Role')
                    ->relationship('roles', 'name')
                    ->visible(in_array(auth()->user()->roles->first()->id ?? null, [1, 4]))
                    ->default(3),
                TextInput::make('password')
                    ->password()
                    ->revealable()
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $context): bool => $context === 'create'),
            ]);
    }
}
