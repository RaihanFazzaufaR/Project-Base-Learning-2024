<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PendudukModel extends Model
{
    use HasFactory;

    protected $table = 'tb_penduduk';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik',
        'nama',
        'tempatLahir',
        'tanggalLahir',
        'jenisKelamin',
        'alamat',
        'agama',
        'pekerjaan',
        'statusNikah',
        'warganegara',
        'niKeluarga',
        'statusDiRw',
        'gaji',
        'noRt',
    ];

    public function kartuKeluarga() : BelongsTo
    {
        return $this->belongsTo(KartuKeluargaModel::class, 'niKeluarga', 'niKeluarga');
    }
}
