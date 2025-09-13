<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Helpers\FileHelpers;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Blogs\BlogResource;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['banner'])) {
            $data['banner'] = FileHelpers::convertWebp($data['banner'], "himsi");
        }

        if (isset($data['gambar']) && is_array($data['gambar'])) {
            foreach ($data['gambar'] as $index => $gambar) {
                $data['gambar'][$index] = FileHelpers::convertWebp($gambar, "himsi");
            }
        }
        return $data;
    }
}
