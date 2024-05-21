<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelDetailModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_leveldetail';
    protected $primaryKey = 'detail_id';
    protected $fillable = [
        'user_id',
        'level_id',
    ];

    public function level() : BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }


}