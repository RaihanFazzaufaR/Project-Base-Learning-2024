<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PendudukModel extends Model
{
    use HasFactory;

    protected $table = 'tb_penduduk';
    protected $primaryKey = 'id_penduduk';
    protected $fillable = [
        'nik',
        'nama',
        'tempatLahir',
        'tanggalLahir',
        'jenisKelamin',
        'agama',
        'pekerjaan',
        'statusNikah',
        'warganegara',
        'id_kartuKeluarga',
        'statusPenduduk',
        'jabatan',
        'gaji',
    ];

    public function kartuKeluarga() : BelongsTo
    {
        return $this->belongsTo(KartuKeluargaModel::class, 'id_kartuKeluarga', 'id_kartuKeluarga');
    }
}
