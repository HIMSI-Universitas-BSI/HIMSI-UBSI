<?php

namespace App\Filament\Resources\Benners\Pages;

use App\Helpers\FileHelpers;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Benners\BennerResource;

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

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle image (single file)
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
                // Jika image adalah string (path file langsung)
                $data['image'] = FileHelpers::convertWebp($data['image'], "himsi");
            }
        }
        return $data;
    }
}
