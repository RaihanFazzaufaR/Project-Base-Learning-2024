<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserAccountModel extends User
{
    use HasFactory, Notifiable, HasApiTokens, CanResetPassword;

    protected $table = 'tb_useraccount';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'email',
        'username',
        'password',
        'id_penduduk',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function levelDetail() : HasMany
    {
        return $this->hasMany(LevelDetailModel::class, 'user_id', 'user_id');
    }

    public function penduduk() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'id_penduduk', 'id_penduduk');
    }
}
