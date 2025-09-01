<?php

namespace App\Filament\Resources\BranchDetails\Pages;

use App\Filament\Resources\BranchDetails\BranchDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBranchDetails extends ListRecords
{
    protected static string $resource = BranchDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
