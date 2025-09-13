<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Helpers\FileHelpers;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Blogs\BlogResource;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

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
        // Handle banner (single file)
        if (isset($data['banner'])) {
            // Jika banner adalah array (dari response yang ditunjukkan)
            if (is_array($data['banner'])) {
                // Ambil file path dari struktur array yang kompleks
                $bannerPath = null;
                foreach ($data['banner'] as $item) {
                    if (is_array($item) && isset($item[0]) && is_string($item[0])) {
                        $bannerPath = $item[0];
                        break;
                    }
                }
                if ($bannerPath) {
                    $data['banner'] = FileHelpers::convertWebp($bannerPath, "blog");
                }
            } else {
                // Jika banner adalah string (path file langsung)
                $data['banner'] = FileHelpers::convertWebp($data['banner'], "blog");
            }
        }

        // Handle image (multiple files)
        if (isset($data['image']) && is_array($data['image'])) {
            $convertedImages = [];
            foreach ($data['image'] as $item) {
                // Tangani struktur array yang kompleks
                if (is_array($item)) {
                    foreach ($item as $key => $value) {
                        if (is_string($value)) {
                            $convertedImages[] = FileHelpers::convertWebp($value, "blog");
                        }
                    }
                } elseif (is_string($item)) {
                    $convertedImages[] = FileHelpers::convertWebp($item, "blog");
                }
            }
            $data['image'] = $convertedImages;
        }

        return $data;
    }
}
