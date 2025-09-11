<?php

namespace App\Filament\Resources\Recrutments\Tables;

use App\Models\Branch;
use App\Models\Status;
use App\Models\Recrutment;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;

class RecrutmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),
                TextColumn::make('semester')
                    ->label('Semester')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('no_wa')
                    ->label('No WhatsApp')
                    ->url(fn ($record) => 'https://wa.me/62' . ltrim($record->no_wa, '0'), true)
                    ->badge('info')
                    ->searchable(),
                TextColumn::make('branch.name')
                    ->label('Cabang / DPC')
                    ->searchable()
                    ->sortable(),
                SelectColumn::make('status_id')
                    ->label('Status Recruitment')
                    ->options(Status::all()->pluck('name', 'id')->toArray())
                    ->searchable()
                    ->disabled(fn () => auth()->user()?->position === null)
                    ->sortable(),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('semester')
                    ->label('Semester')
                    ->options(
                        fn () => Recrutment::query()
                            ->distinct()
                            ->pluck('semester', 'semester')
                            ->toArray()
                    ),
                SelectFilter::make('branch_id')
                    ->label('Cabang / DPC')
                    ->options(
                        fn () => Branch::pluck('name', 'id')->toArray()
                    ),
                SelectFilter::make('status_id')
                    ->label('Status Recruitment')
                    ->options(
                        fn () => Status::pluck('name', 'id')->toArray()
                    ),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
