<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AjuanBansosMOdel extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'tb_ajuan_bansos';

    // Primary key
    protected $primaryKey = 'id_ajuanBansos';

    // Fillable fields
    protected $fillable = [
        'id_kartuKeluarga',
        'status_rumah',
        'tanggungan',
        'penghasilan_keluarga',
        'luas_tempat_tinggal',
        'pengeluaran_listrik',
        'foto_rumah',
        'SKTM',
    ];

    // Define relationship with KartuKeluarga model
    public function kartuKeluarga(): HasMany
    {
        return $this->hasMany(KartuKeluargaModel::class, 'id_kartuKeluarga', 'id_kartuKeluarga');
    }
}