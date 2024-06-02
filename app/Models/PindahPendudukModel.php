<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PindahPendudukModel extends Model
{
    use HasFactory;

    protected $table = 'tb_pindahPenduduk';
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
        'noTelp',
    ];

    public function kartuKeluarga(): BelongsTo
    {
        return $this->belongsTo(KartuKeluargaModel::class, 'id_kartuKeluarga', 'id_kartuKeluarga');
    }

    public function userAccount(): HasOne
    {
        return $this->hasOne(UserAccountModel::class, 'id_penduduk', 'id_penduduk');
    }

    public function umkm(): HasMany
    {
        return $this->hasMany(UmkmModel::class, 'pemilik_id', 'id_penduduk');
    }

    public function bansos(): HasMany
    {
        return $this->hasMany(BansosModel::class, 'penerima_id', 'id_penduduk');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(JadwalModel::class, 'pembuat_id', 'id_penduduk');
    }
}
