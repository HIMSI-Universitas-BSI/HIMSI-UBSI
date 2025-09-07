<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'setting';
    protected $guarded = ['id'];

    protected $casts = [
        'value' => 'array',
    ];

    public function getValueAttribute($value)
    {
        if (!$value) return [];

        switch ($this->type) {
            case 'Textarea':
                return ['Textarea' => $value];
            case 'RichEditor':
                return ['RichEditor' => $value];
            default:
                return $value;
        }
    }

    protected static function booted()
    {
        static::saved(function ($setting) {
            Cache::forget("setting_{$setting->key}");
        });

        static::created(function ($setting) {
            Cache::forget("setting_{$setting->key}");
        });

        static::updated(function ($setting) {
            Cache::forget("setting_{$setting->key}");
        });

        static::deleted(function ($setting) {
            Cache::forget("setting_{$setting->key}");
        });
    }
}
