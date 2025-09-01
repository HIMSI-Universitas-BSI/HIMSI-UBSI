<?php

namespace App\Filament\Resources\BranchDetails\Schemas;

use App\Models\Branch;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class BranchDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('branch_id')
                    ->options(Branch::all()->pluck('name', 'id'))
                    ->required()
                    ->label('Branch')
                    ->columnSpanFull(),

                Section::make('Ketua')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('ketua.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('ketua.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('ketua.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Section::make('Wakil Ketua')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('wakil_ketua.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('wakil_ketua.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('wakil_ketua.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Section::make('Sekertaris 1')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('sekertaris_1.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('sekertaris_1.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('sekertaris_1.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Section::make('Sekertaris 2')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('sekertaris_2.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('sekertaris_2.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('sekertaris_2.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Section::make('Bendahara 1')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('bendahara_1.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('bendahara_1.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('bendahara_1.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Section::make('Bendahara 2')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('bendahara_2.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('bendahara_2.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('bendahara_2.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Section::make('KOOR PENDIDIKAN')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('koor_pendidikan.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('koor_pendidikan.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('koor_pendidikan.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Section::make('KOOR KOMINFO')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('koor_kominfo.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('koor_kominfo.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('koor_kominfo.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Section::make('KOOR RSDM')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('koor_rsdm.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('koor_rsdm.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('koor_rsdm.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Section::make('KOOR LITBANG')
                    ->description('Isi Data Struktural')
                    ->icon(Heroicon::User)
                    ->schema([
                        FileUpload::make('koor_litbang.image')
                            ->disk('public')
                            ->label('Foto')
                            ->directory('struktural_image'),
                        TextInput::make('koor_litbang.name')
                            ->required()
                            ->label('Nama'),
                        TextInput::make('koor_litbang.no_wa')
                            ->label('No WhatsApp')
                            ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62'),
                    ]),

                Toggle::make('active')
                    ->required(),
            ]);
    }
}
