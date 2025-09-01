<?php

namespace App\Filament\Resources\BranchDetails\Pages;

use App\Filament\Resources\BranchDetails\BranchDetailResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBranchDetail extends ViewRecord
{
    protected static string $resource = BranchDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
