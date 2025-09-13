<?php

namespace App\Filament\Resources\Benners\Pages;

use App\Helpers\FileHelpers;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Benners\BennerResource;

class CreateBenner extends CreateRecord
{
    protected static string $resource = BennerResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['image'])) {
            $data['image'] = FileHelpers::convertWebp($data['image'], "himsi");
        }

        return $data;
    }
}
