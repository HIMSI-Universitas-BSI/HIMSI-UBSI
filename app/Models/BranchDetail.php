<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BranchDetail extends Model
{
    use HasFactory, Notifiable, SoftDeletes, AuditedBySoftDelete;
    protected $table = 'branch_detail';
    protected $guarded = ['id'];

    protected $casts = [
        'ketua' => 'array',
        'wakil_ketua' => 'array',
        'sekertaris_1' => 'array',
        'sekertaris_2' => 'array',
        'bendahara_1' => 'array',
        'bendahara_2' => 'array',
        'koor_pendidikan' => 'array',
        'koor_kominfo' => 'array',
        'koor_rsdm' => 'array',
        'koor_litbang' => 'array',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
