<?php

namespace App\Filament\Resources\Recrutments\Schemas;

use App\Models\User;
use App\Models\Branch;
use App\Models\Status;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;

class RecrutmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nim')
                    ->label('NIM')
                    ->numeric()
                    ->maxLength(8)
                    ->required(),
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required(),
                Select::make('semester')
                    ->label('Semester')
                    ->options([
                        'Semester 1' => 'Semester 1',
                        'Semester 2' => 'Semester 2',
                        'Semester 3' => 'Semester 3',
                        'Semester 4' => 'Semester 4',
                    ])
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->default(fn () => User::find(Auth::id())?->email),
                TextInput::make('instagram')
                    ->required(),
                TextInput::make('no_wa')
                    ->label('No WhatsApp')
                    ->numeric()
                    ->maxLength(16)
                    ->helperText('Masukkan No WhatsApp aktif, di awali dengan 62')
                    ->required(),
                FileUpload::make('ektm')
                    ->label('EKTM')
                    ->image()
                    ->disk('public')
                    ->directory('ektm')
                    ->columnSpanFull()
                    ->helperText('Screenshot halaman beranda pada aplikasi BSI ID'),
                Textarea::make('description')
                    ->label('Alasan ingin bergabung dengan HIMSI')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('follow_dpp')
                    ->label('Bukti Follow Instagram DPP HIMSI')
                    ->disk('public')
                    ->image()
                    ->required()
                    ->directory('follow_dpp')
                    ->columnSpanFull()
                    ->helperText('Screenshot halaman bukti follow DPP HIMSI'),

                Section::make('Cabang Himsi')
                    ->description('Data Dewan Pimpinan Cabang (DPC) HIMSI UBSI')
                    ->icon(Heroicon::BuildingOffice2)
                    ->schema([
                        Select::make('branch_id')
                            ->required()
                            ->label('Cabang / DPC')
                            ->options(Branch::all()->pluck('name', 'id'))
                            ->reactive() // wajib biar bisa trigger perubahan
                            ->afterStateUpdated(function ($state, callable $set) {
                                if ($state) {
                                    $branch = \App\Models\Branch::find($state);
                                    $set('instagram dpc', $branch?->instagram);
                                } else {
                                    $set('instagram dpc', null);
                                }
                            }),
                        TextInput::make('instagram dpc'),
                        FileUpload::make('follow_dpc')
                            ->label('Bukti Follow Instagram DPC HIMSI')
                            ->disk('public')
                            ->image()
                            ->directory('follow_dpc')
                            ->helperText('Screenshot halaman bukti follow DPC HIMSI'),
                    ])->columnSpanFull(),

                TextInput::make('cv')
                    ->label('Curriculum Vitae / CV')
                    ->columnSpanFull()
                    ->helperText('Mohon Masukan Link Drive Yang Berisi CV Anda'),
                
                Select::make('status_id')
                    ->default(1)
                    ->label('Status')
                    ->options(Status::all()->pluck('name', 'id'))
                    ->visible(fn () => Auth::user()?->position !== null),
            ]);
    }
}
