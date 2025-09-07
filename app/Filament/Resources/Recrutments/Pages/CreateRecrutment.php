<?php

namespace App\Filament\Resources\Recrutments\Pages;

use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Recrutments\RecrutmentResource;

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

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        if (Auth::user()?->position === null) {
            $data['status_id'] = 1;
        }

        return $data;
    }
}
