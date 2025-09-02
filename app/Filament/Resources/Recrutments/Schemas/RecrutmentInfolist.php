<?php

namespace App\Filament\Resources\Recrutments\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RecrutmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nim'),
                TextEntry::make('name'),
                TextEntry::make('semester'),
                TextEntry::make('ektm'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('instagram'),
                TextEntry::make('no_wa'),
                TextEntry::make('branch_id')
                    ->numeric(),
                TextEntry::make('follow_dpc'),
                TextEntry::make('cv'),
                TextEntry::make('status_id')
                    ->numeric(),
                TextEntry::make('deleted_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
