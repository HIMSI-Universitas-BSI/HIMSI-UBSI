<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class FileHelpers
{
    public static function convertWebp($file, $disk)
    {
        // Validasi input
        if (empty($file)) {
            return $file;
        }

        // Jika file sudah dalam format webp, return langsung
        if (is_string($file) && str_ends_with($file, '.webp')) {
            return $file;
        }

        // Jika input adalah array atau bukan string yang valid, return null
        if (!is_string($file) || !Storage::disk($disk)->exists($file)) {
            return null;
        }

        try {
            $manager = new ImageManager(new Driver());
            $image = $manager->read(Storage::disk($disk)->path($file));
            $encoded = $image->toWebp(85);
            $imageName = pathinfo($file, PATHINFO_FILENAME) . '.webp';
            Storage::disk($disk)->put($imageName, $encoded);
            Storage::disk($disk)->delete($file);
            return $imageName;
        } catch (\Exception $e) {
            Log::error('Error converting image to webp: ' . $e->getMessage());
            return $file; // Return original file if conversion fails
        }
    }
}
