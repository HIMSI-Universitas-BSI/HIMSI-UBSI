<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingHelper
{
    public static function getSetting($key, $lang = 'id')
    {
        $cacheKey = "setting_{$key}";

        $setting = Cache::remember($cacheKey, now()->addMinutes(5), function () use ($key) {
            return Setting::where('key', $key)->where('active', true)->first();
        });

        if (!$setting) {
            return "Setting with key '$key' not found";
        }

        $value = $setting->value;

        // Coba decode JSON
        $decoded = json_decode($value, true);

        // Jika JSON valid dan berbentuk array, ambil berdasarkan bahasa
        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            return $decoded[$lang] ?? reset($decoded); // fallback ke elemen pertama
        }

        // Jika bukan JSON, kembalikan string biasa
        return $value;
    }
}
