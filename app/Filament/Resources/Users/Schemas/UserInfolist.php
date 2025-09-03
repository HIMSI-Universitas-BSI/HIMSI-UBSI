<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email'),
                TextEntry::make('branch.name')
                    ->label('Cabang / DPC')
                    ->default('-'),
                TextEntry::make('position')
                    ->label('Posisi')
                    ->default('-'),
                TextEntry::make('roles.name')
                    ->label('Role'),
                Section::make('Timestamps')
                    ->icon(Heroicon::Clock)
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('created_at')
                                    ->label('Created At')
                                    ->dateTime('d/F/Y H:i'),
                                TextEntry::make('updated_at')
                                    ->label('Last Updated')
                                    ->dateTime('d/F/Y H:i'),
                            ]),
                    ])->columnSpanFull()->collapsible(),
            ]);
    }
}
