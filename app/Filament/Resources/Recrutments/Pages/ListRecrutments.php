<?php

namespace App\Filament\Resources\Recrutments\Pages;

use App\Filament\Resources\Recrutments\RecrutmentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRecrutments extends ListRecords
{
    protected static string $resource = RecrutmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
