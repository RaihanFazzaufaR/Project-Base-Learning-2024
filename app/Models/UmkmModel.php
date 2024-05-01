<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UmkmModel extends Model
{
    use HasFactory;

    protected $table = 'tb_umkm';
    protected $primaryKey = 'umkm_id';
    protected $fillable = [
        'nama',
        'pemilik_id',
        'lokasi',
        'tipe',
        'buka_waktu',
        'tutup_waktu',
        'deskripsi',
        'lokasi_map',
        'status',
        'foto',
        'no_wa',
    ];

    public function pemilik(): BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'pemilik_id', 'id');
    }
}