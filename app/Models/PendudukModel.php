<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


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

    public function userAccount() : HasMany {
        return $this->HasMany(UserAccountModel::class, 'id_penduduk', 'id_penduduk');
    }

    public function umkm() : HasMany {
        return $this->HasMany(UmkmModel::class, 'pemilik_id', 'id_penduduk');
    }

    public function bansos() : HasMany {
        return $this->HasMany(BansosModel::class, 'penerima_id', 'id_penduduk');
    }
}
