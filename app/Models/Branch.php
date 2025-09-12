<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'branch';
    protected $guarded = ['id'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    protected static function booted()
    {
        static::saved(function ($branch) {
            Cache::forget('home_data');
        });

        static::deleted(function ($branch) {
            Cache::forget('home_data');
        });
    }
}
