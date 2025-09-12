<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Division extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'division';
    protected $guarded = ['id'];
    
    protected $casts = [
        'job_description' => 'array',
    ];

    protected static function booted()
    {
        static::saved(function ($division) {
            Cache::forget('home_data');
        });

        static::deleted(function ($division) {
            Cache::forget('home_data');
        });
    }
}
