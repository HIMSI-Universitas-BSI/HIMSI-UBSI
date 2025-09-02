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
            ExportColumn::make('nim')
                ->label('NIM'),
            ExportColumn::make('name')
                ->label('Nama'),
            ExportColumn::make('semester')
                ->label('Semester'),
            ExportColumn::make('ektm')
                ->label('EKTM')
                ->formatStateUsing(fn ($state) => $state ? asset('storage/' . $state) : null),
            ExportColumn::make('email')
                ->label('Email'),
            ExportColumn::make('instagram')
                ->label('Instagram'),
            ExportColumn::make('no_wa')
                ->label('No WhatsApp'),
            ExportColumn::make('description')
                ->label('Motivasi Bergabung'),
            ExportColumn::make('branch.name')
                ->label('Cabang / DPC'),
            ExportColumn::make('follow_dpc')
                ->label('Follow DPC')
                ->formatStateUsing(fn ($state) => $state ? asset('storage/' . $state) : null),
            ExportColumn::make('cv')
                ->label('CV'),
            ExportColumn::make('status.name')
                ->label('Status'),
            ExportColumn::make('created_at')
                ->label('Di Buat Pada'),
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
