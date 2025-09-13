<?php

namespace App\Filament\Resources\Branches\Pages;

use App\Helpers\FileHelpers;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Branches\BranchResource;

class EditBranch extends EditRecord
{
    protected static string $resource = BranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle poster (single file)
        if (isset($data['poster'])) {
            // Jika poster adalah array (dari response yang ditunjukkan)
            if (is_array($data['poster'])) {
                // Ambil file path dari struktur array yang kompleks
                $posterPath = null;
                foreach ($data['poster'] as $item) {
                    if (is_array($item) && isset($item[0]) && is_string($item[0])) {
                        $posterPath = $item[0];
                        break;
                    }
                }
                if ($posterPath) {
                    $data['poster'] = FileHelpers::convertWebp($posterPath, "himsi");
                }
            } else {
                // Jika poster adalah string (path file langsung)
                $data['poster'] = FileHelpers::convertWebp($data['poster'], "himsi");
            }
        }
        return $data;
    }
}
