<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'blog';
    protected $guarded = ['id'];
    
    protected $casts = [
        'image' => 'array',
    ];
    
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    protected static function booted()
    {
        static::saved(function ($blog) {
            Cache::forget('home_data');
        });

        static::deleted(function ($blog) {
            Cache::forget('home_data');
        });
    }
}
