<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'tb_level';
    protected $primaryKey = 'level_id';
    protected $fillable = [
        'nama_level',
    ];

    public function userAccount() : HasMany
    {
        return $this->hasMany(UserAccountModel::class, 'id_level', 'level_id');
    }
}
