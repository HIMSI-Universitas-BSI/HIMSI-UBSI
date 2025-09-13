<?php

namespace App\Filament\Resources\Divisions\Pages;

use App\Helpers\FileHelpers;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Divisions\DivisionResource;

class EditDivision extends EditRecord
{
    protected static string $resource = DivisionResource::class;

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
        // Handle logo (single file)
        if (isset($data['logo'])) {
            // Jika logo adalah array (dari response yang ditunjukkan)
            if (is_array($data['logo'])) {
                // Ambil file path dari struktur array yang kompleks
                $logoPath = null;
                foreach ($data['logo'] as $item) {
                    if (is_array($item) && isset($item[0]) && is_string($item[0])) {
                        $logoPath = $item[0];
                        break;
                    }
                }
                if ($logoPath) {
                    $data['logo'] = FileHelpers::convertWebp($logoPath, "himsi");
                }
            } else {
                // Jika logo adalah string (path file langsung)
                $data['logo'] = FileHelpers::convertWebp($data['logo'], "himsi");
            }
        }

        // Handle Image (single file)
        if (isset($data['image'])) {
            // Jika image adalah array (dari response yang ditunjukkan)
            if (is_array($data['image'])) {
                // Ambil file path dari struktur array yang kompleks
                $imagePath = null;
                foreach ($data['image'] as $item) {
                    if (is_array($item) && isset($item[0]) && is_string($item[0])) {
                        $imagePath = $item[0];
                        break;
                    }
                }
                if ($imagePath) {
                    $data['image'] = FileHelpers::convertWebp($imagePath, "himsi");
                }
            } else {
                // Jika logo adalah string (path file langsung)
                $data['image'] = FileHelpers::convertWebp($data['image'], "himsi");
            }
        }
        return $data;
    }
}
