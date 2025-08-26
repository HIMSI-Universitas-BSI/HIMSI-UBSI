<?php 

namespace App\Helpers;

use App\Models\Benner;

class BennerHelper
{
    /**
     * Get the banner image URL based on the type.
     *
     * @param string $type
     * @return string
     */
    public static function getBennerImageUrl(string $name): string
    {
        $Benner = Benner::where('name', $name)->first();

        if ($Benner && $Benner->image) {
            return asset('storage/' . $Benner->image);
        }

        return asset('images/default-benner.jpg'); // Ganti dengan path default banner jika tidak ditemukan
    }
}