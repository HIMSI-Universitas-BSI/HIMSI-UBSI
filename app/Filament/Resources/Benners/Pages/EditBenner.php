<?php

namespace App\Filament\Resources\Benners\Pages;

use App\Filament\Resources\Benners\BennerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditBenner extends EditRecord
{
    protected static string $resource = BennerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
