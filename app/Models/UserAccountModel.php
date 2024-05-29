<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\CustomResetPasswordNotification;

class UserAccountModel extends User
{
    use HasFactory, Notifiable, HasApiTokens, CanResetPassword;
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPasswordNotification($token));
    }
    protected $table = 'tb_useraccount';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'email',
        'username',
        'password',
        'id_penduduk',
        'id_level',
        'image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function levelDetail() : BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'id_level', 'level_id');
    }

    public function penduduk() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'id_penduduk', 'id_penduduk');
    }
}