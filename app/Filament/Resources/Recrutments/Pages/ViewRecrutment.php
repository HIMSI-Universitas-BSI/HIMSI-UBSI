<?php

namespace App\Filament\Resources\Recrutments\Pages;

use App\Filament\Resources\Recrutments\RecrutmentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewRecrutment extends ViewRecord
{
    protected static string $resource = RecrutmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
