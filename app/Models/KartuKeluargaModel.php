<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KartuKeluargaModel extends Model
{
    use HasFactory;

    protected $table = 'tb_kartukeluarga';
    protected $primaryKey = 'id_kartuKeluarga';
    protected $fillable = [
        'niKeluarga',
        'jmlAnggota',
        'alamat',
        'kepalaKeluarga',
        'rt',
    ];

    public function penduduk(): HasMany
    {
        return $this->hasMany(PendudukModel::class, 'id_kartuKeluarga', 'id_kartuKeluarga');
    }

    public function bansos(): HasMany
    {
        return $this->hasMany(AjuanBansosModel::class, 'id_kartuKeluarga', 'id_kartuKeluarga');
    }
}