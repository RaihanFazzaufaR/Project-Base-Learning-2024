<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


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
        'noTelp',
    ];

    public function kartuKeluarga(): BelongsTo
    {
        return $this->belongsTo(KartuKeluargaModel::class, 'id_kartuKeluarga', 'id_kartuKeluarga');
    }

    public function userAccount(): HasOne
    {
        return $this->HasOne(UserAccountModel::class, 'id_penduduk', 'id_penduduk');
    }

    public function umkm(): HasMany
    {
        return $this->HasMany(UmkmModel::class, 'pemilik_id', 'id_penduduk');
    }

    public function jadwal(): HasMany
    {
        return $this->HasMany(JadwalModel::class, 'pembuat_id', 'id_penduduk');
    }

    public function pengumuman(): HasMany
    {
        return $this->HasMany(PengumumanModel::class, 'pembuat_id_pengumuman', 'id_penduduk');
    }

    public function surat(): HasMany
    {
        return $this->HasMany(SuratModel::class, 'peminta_id', 'id_penduduk');
    }

    public function pindahPenduduk(): HasMany
    {
        return $this->HasMany(PindahPendudukModel::class, 'id_foreign_penduduk', 'id_penduduk');
    }
}