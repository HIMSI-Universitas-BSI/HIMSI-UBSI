<?php

namespace App\Filament\Resources\Branches\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class BranchesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('sektor')
                    ->searchable()
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'sektor_barat' => 'Sektor Barat',
                        'sektor_tengah' => 'Sektor Tengah',
                        'sektor_timur' => 'Sektor Timur',
                        default => $state,
                    }),
                TextColumn::make('instagram')
                    ->url(fn ($record) => $record->instagram, true)
                    ->badge('info')
                    ->searchable(),
                TextColumn::make('grup_wa')
                    ->url(fn ($record) => $record->grup_wa, true)
                    ->badge('info')
                    ->limit(50)
                    ->searchable(),
                ImageColumn::make('poster')
                    ->disk('public'),
                TextColumn::make('description')
                    ->searchable()
                    ->limit(50),
                IconColumn::make('active')
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
