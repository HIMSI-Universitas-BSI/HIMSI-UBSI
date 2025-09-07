<?php 

namespace App\Helpers;

use App\Models\Benner;
use Illuminate\Support\Facades\Cache;

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
        $cacheKey = "benner_image_{$name}";

        $benner = Cache::remember($cacheKey, now()->addMinutes(5), function () use ($name) {
            return Benner::where('name', $name)
                ->where('active', true)
                ->first();
        });

        if ($benner && $benner->image) {
            return asset('storage/' . $benner->image);
        }

        return asset('images/default-benner.jpg'); // fallback jika tidak ada
    }
}