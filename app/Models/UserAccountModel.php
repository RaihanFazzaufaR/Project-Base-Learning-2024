<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;

class UserAccountModel extends User
{
    use HasFactory;

    protected $table = 'tb_useraccount';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'username',
        'password',
        'nik',
    ];

    public function levelDetail() : HasMany
    {
        return $this->hasMany(LevelDetailModel::class, 'user_id', 'user_id');
    }

    public function penduduk() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'nik', 'nik');
    }
}
