<?php

namespace App\Filament\Resources\Branches\Pages;

use App\Helpers\FileHelpers;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Branches\BranchResource;

class CreateBranch extends CreateRecord
{
    protected static string $resource = BranchResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['poster'])) {
            $data['poster'] = FileHelpers::convertWebp($data['poster'], "himsi");
        }

        return $data;
    }
}
