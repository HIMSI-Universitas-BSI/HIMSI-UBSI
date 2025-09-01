<?php

namespace App\Filament\Resources\BranchDetails\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BranchDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('branch_id')
                    ->required()
                    ->numeric(),
                TextInput::make('ketua')
                    ->required(),
                TextInput::make('wakil_ketua')
                    ->required(),
                TextInput::make('sekertaris_1')
                    ->required(),
                TextInput::make('sekertaris_2')
                    ->required(),
                TextInput::make('bendahara_1')
                    ->required(),
                TextInput::make('bendahara_2')
                    ->required(),
                TextInput::make('koor_pendidikan')
                    ->required(),
                TextInput::make('koor_kominfo')
                    ->required(),
                TextInput::make('koor_rsdm')
                    ->required(),
                TextInput::make('koor_litbang')
                    ->required(),
                Toggle::make('active')
                    ->required(),
                TextInput::make('created_by')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('updated_by')
                    ->numeric(),
                TextInput::make('deleted_by')
                    ->numeric(),
            ]);
    }
}
