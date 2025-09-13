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
            $data['banner'] = FileHelpers::convertWebp($data['banner'], "blog");
        }

        if (isset($data['image']) && is_array($data['image'])) {
            foreach ($data['image'] as $index => $image) {
                $data['image'][$index] = FileHelpers::convertWebp($image, "blog");
            }
        }
        return $data;
    }
}
