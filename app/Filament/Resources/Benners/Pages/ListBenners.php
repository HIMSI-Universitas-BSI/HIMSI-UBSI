<?php

namespace App\Filament\Resources\Benners\Pages;

use App\Filament\Resources\Benners\BennerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBenners extends ListRecords
{
    protected static string $resource = BennerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
