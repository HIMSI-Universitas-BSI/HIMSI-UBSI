<?php

namespace App\Filament\Resources\Recrutments\Pages;

use Filament\Actions\CreateAction;
use Filament\Actions\ExportAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Exports\RecrutmentExporter;
use App\Filament\Resources\Recrutments\RecrutmentResource;

class ListRecrutments extends ListRecords
{
    protected static string $resource = RecrutmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            ExportAction::make()
                ->exporter(RecrutmentExporter::class)
                ->label('Export Data')
                ->icon('heroicon-m-document-chart-bar')
                ->color('success')
                ->fileDisk('public')
                ->visible(fn () => auth()->user()?->position !== null)
                ->modifyQueryUsing(function ($query) {
                    $user = auth()->user();

                    if ($user->position === 'DPP') {
                        // DPP bisa lihat semua data
                        return $query;
                    }

                    if ($user->position === 'DPC') {
                        // DPC hanya data dengan branch_id sesuai user
                        return $query->where('branch_id', $user->branch_id);
                    }

                    // default kalau bukan DPP/DPC (misal di-restrict kosongkan)
                    return $query->whereNull('id');
                }),
        ];
    }
}
