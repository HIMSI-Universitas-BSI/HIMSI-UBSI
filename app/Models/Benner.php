<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Benner extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'benner';
    protected $guarded = ['id'];

    protected static function booted()
    {
        static::saved(function ($benner) {
            Cache::forget("benner_image_{$benner->name}");
        });

        static::created(function ($benner) {
            Cache::forget("benner_image_{$benner->name}");
        });

        static::updated(function ($benner) {
            Cache::forget("benner_image_{$benner->name}");
        });

        static::deleted(function ($benner) {
            Cache::forget("benner_image_{$benner->name}");
        });
    }
}
