<?php

namespace App\Filament\Resources\Divisions\Pages;

use App\Helpers\FileHelpers;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Divisions\DivisionResource;

class CreateDivision extends CreateRecord
{
    protected static string $resource = DivisionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['logo'])) {
            $data['logo'] = FileHelpers::convertWebp($data['logo'], "himsi");
        }

        if (isset($data['image'])) {
            $data['image'] = FileHelpers::convertWebp($data['image'], "himsi");
        }

        return $data;
    }
}
