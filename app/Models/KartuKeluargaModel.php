<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KartuKeluargaModel extends Model
{
    use HasFactory;

    protected $table = 'tb_kartukeluarga';
    protected $primaryKey = 'niKeluarga';
    protected $fillable = [
        'niKeluarga',
        'jmlAnggotaKeluarga',
    ];

    public function penduduk() : HasMany
    {
        return $this->hasMany(PendudukModel::class, 'NIKeluarga', 'niKeluarga');
    }
}
