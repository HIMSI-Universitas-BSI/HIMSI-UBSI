<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required()
                    ->maxLength(128)
                    ->columnSpanFull(),
                Select::make('type')
                    ->label('Tipe Input')
                    ->options([
                        'Textarea' => "Text Area",
                        'RichEditor' => 'Editor Teks',
                    ])
                    ->default('RichEditor')
                    ->afterStateUpdated(function (callable $set) {
                        // $set('value', null);
                    })
                    ->reactive()
                    ->columnSpanFull(),
                RichEditor::make('value.RichEditor')
                    ->label('Value (Rich Editor)')
                    ->columnSpanFull()
                    ->hidden(fn ($get) => $get('type') !== 'RichEditor'),

                Textarea::make('value.Textarea')
                    ->label('Value (Text Area)')
                    ->autosize()
                    ->columnSpanFull()
                    ->hidden(fn ($get) => $get('type') !== 'Textarea'),

                Toggle::make('active')
                    ->required(),
            ]);
    }
}
