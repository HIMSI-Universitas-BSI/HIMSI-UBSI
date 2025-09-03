<?php

namespace App\Filament\Resources\Recrutments\Pages;

use App\Filament\Resources\Recrutments\RecrutmentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRecrutment extends CreateRecord
{
    protected static string $resource = RecrutmentResource::class;

    // method buat redirect ke grup wa saat create
    protected function getRedirectUrl(): string
    {
        if ($this->record && $this->record->branch) {
            return $this->record->branch->grup_wa;
        }

        return $this->getResource()::getUrl('index');
    }
}
