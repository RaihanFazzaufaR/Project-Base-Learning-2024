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

    public function levelDetail() : HasMany
    {
        return $this->hasMany(LevelDetailModel::class, 'level_id', 'level_id');
    }
}
