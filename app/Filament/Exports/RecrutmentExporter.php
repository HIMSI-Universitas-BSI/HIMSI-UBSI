<?php

namespace App\Filament\Exports;

use App\Models\Recrutment;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Support\Number;

class RecrutmentExporter extends Exporter
{
    protected static ?string $model = Recrutment::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('nim'),
            ExportColumn::make('name'),
            ExportColumn::make('semester'),
            ExportColumn::make('ektm'),
            ExportColumn::make('email'),
            ExportColumn::make('instagram'),
            ExportColumn::make('no_wa'),
            ExportColumn::make('description'),
            ExportColumn::make('branch_id'),
            ExportColumn::make('follow_dpc'),
            ExportColumn::make('cv'),
            ExportColumn::make('status_id'),
            ExportColumn::make('deleted_at'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your recrutment export has completed and ' . Number::format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
