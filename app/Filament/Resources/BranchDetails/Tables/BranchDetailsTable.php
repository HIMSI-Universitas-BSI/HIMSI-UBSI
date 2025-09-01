<?php

namespace App\Filament\Resources\BranchDetails\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class BranchDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('branch.name')
                    ->searchable()
                    ->label('Nama Cabang'),
                TextColumn::make('branch.sektor')
                    ->searchable()
                    ->label('Sektor')
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'sektor_barat' => 'Sektor Barat',
                        'sektor_tengah' => 'Sektor Tengah',
                        'sektor_timur' => 'Sektor Timur',
                        default => $state,
                    }),
                TextColumn::make('branch.location')
                    ->searchable()
                    ->label('Lokasi'),
                TextColumn::make('branch.instagram')
                    ->searchable()
                    ->label('Instagram')
                    ->url(fn ($record) => $record->instagram, true)
                    ->badge('info'),
                TextColumn::make('ketua.name')
                    ->searchable(),
                TextColumn::make('wakil_ketua.name')
                    ->searchable(),
                IconColumn::make('active')
                    ->label('Status')
                    ->boolean(),
                TextColumn::make('createdBy.name')
                    ->label('Created By'),
                TextColumn::make('updatedBy.name')
                    ->label("Updated by"),
                TextColumn::make('deletedBy.name')
                    ->label("Deleted by"),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
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
