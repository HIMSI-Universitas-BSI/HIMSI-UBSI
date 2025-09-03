<?php

namespace App\Filament\Resources\Recrutments\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;

class RecrutmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Data Recrutment Mahasiswa')
                    ->description('Mohon DI Cek Kembali Data Anda')
                    ->icon(Heroicon::UserCircle)
                    ->schema([
                        TextEntry::make('nim')
                            ->label('NIM'),
                        TextEntry::make('name')
                            ->label('Nama Lengkap'),
                        TextEntry::make('semester')
                            ->label('Semester'),
                        TextEntry::make('email')
                            ->label('Email'),
                        TextEntry::make('instagram')
                            ->label('Instagram')
                            ->url(fn ($record) => $record->instagram, true)
                            ->badge('info'),
                        TextEntry::make('no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('success'),
                        ImageEntry::make('ektm')
                            ->label('E-KTM')
                            ->disk('public')
                            ->columnSpanFull(),
                        TextEntry::make('description')
                            ->label('Motivasi Bergabung Dengan HIMSI')
                            ->columnSpanFull(),
                        TextEntry::make('branch.name')
                            ->label('Cabang / DPC'),
                        ImageEntry::make('follow_dpc')
                            ->label('Follow DPC')
                            ->disk('public'),
                        ImageEntry::make('follow_dpp')
                            ->label('Follow DPP')
                            ->disk('public'),
                        TextEntry::make('cv')
                            ->label('Curriculum Vitae / CV')
                            ->url(fn ($record) => $record->cv, true)
                            ->badge('info'),
                        TextEntry::make('status.name')
                            ->label('Status Recruitment'),
                    ])->columns(2)->columnSpanFull(),
                
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
