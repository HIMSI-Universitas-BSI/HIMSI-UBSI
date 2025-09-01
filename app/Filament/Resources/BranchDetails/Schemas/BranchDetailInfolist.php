<?php

namespace App\Filament\Resources\BranchDetails\Schemas;

use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;

class BranchDetailInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Cabang')
                    ->description('Data Cabang')
                    ->icon(Heroicon::BuildingOffice2)
                    ->schema([
                        TextEntry::make('branch.name')
                            ->label('Nama Cabang'),
                        TextEntry::make('branch.sektor')
                            ->label('Sektor')
                            ->formatStateUsing(fn ($state) => match ($state) {
                                'sektor_barat' => 'Sektor Barat',
                                'sektor_tengah' => 'Sektor Tengah',
                                'sektor_timur' => 'Sektor Timur',
                                default => $state,
                            }),
                        TextEntry::make('branch.location')
                            ->label('Lokasi'),
                        TextEntry::make('branch.instagram')
                            ->label('Instagram')
                            ->url(fn ($record) => $record->instagram, true)
                            ->badge('info'),
                        TextEntry::make('branch.description')
                            ->label('Deskripsi')
                            ->columnSpanFull(),
                        IconEntry::make('active')
                            ->label('Status')
                            ->boolean(),
                    ])->columns(2)->columnSpanFull(),
                
                Section::make('Ketua')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('ketua.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('ketua.name')
                            ->label('Nama'),
                        TextEntry::make('ketua.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),
                
                Section::make('Wakil Ketua')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('wakil_ketua.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('wakil_ketua.name')
                            ->label('Nama'),
                        TextEntry::make('wakil_ketua.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),

                Section::make('Sekertaris 1')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('sekertaris_1.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('sekertaris_1.name')
                            ->label('Nama'),
                        TextEntry::make('sekertaris_1.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),

                Section::make('Sekertaris 2')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('sekertaris_2.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('sekertaris_2.name')
                            ->label('Nama'),
                        TextEntry::make('sekertaris_2.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),

                Section::make('Bendahara 1')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('bendahara_1.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('bendahara_1.name')
                            ->label('Nama'),
                        TextEntry::make('bendahara_1.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),

                Section::make('Bendahara 2')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('bendahara_2.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('bendahara_2.name')
                            ->label('Nama'),
                        TextEntry::make('bendahara_2.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),

                Section::make('KOOR PENDIDIKAN')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('koor_pendidikan.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('koor_pendidikan.name')
                            ->label('Nama'),
                        TextEntry::make('koor_pendidikan.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),

                Section::make('KOOR KOMINFO')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('koor_kominfo.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('koor_kominfo.name')
                            ->label('Nama'),
                        TextEntry::make('koor_kominfo.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),

                Section::make('KOOR RSDM')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('koor_rsdm.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('koor_rsdm.name')
                            ->label('Nama'),
                        TextEntry::make('koor_rsdm.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),

                Section::make('KOOR LITBANG')
                    ->description('Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        ImageEntry::make('koor_litbang.image')
                            ->label('Foto')
                            ->disk('public')
                            ->imageHeight(140)
                            ->circular()
                            ->default(asset('images/pp.jpg')),
                        TextEntry::make('koor_litbang.name')
                            ->label('Nama'),
                        TextEntry::make('koor_litbang.no_wa')
                            ->label('No WhatsApp')
                            ->url(fn ($record) => 'https://wa.me/' . ltrim($record->no_wa, '0'), true)
                            ->badge('info'),
                    ])->columns(2),

                Section::make('Timestamps')
                    ->icon(Heroicon::Clock)
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('created_at')
                                    ->label('Created At')
                                    ->dateTime('d/m/Y H:i'),
                                TextEntry::make('updated_at')
                                    ->label('Last Updated')
                                    ->dateTime('d/m/Y H:i'),
                            ]),
                    ])->columnSpanFull()->collapsible(),
            ]);
    }
}
