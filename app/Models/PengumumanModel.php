<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengumumanModel extends Model
{
    use HasFactory;

    protected $table = 'tb_pengumuman';

    protected $primaryKey = 'pengumuman_id';

    protected $fillable = [
        'judul',
        'aktivitas_tipe',
        'mulai_tanggal',
        'akhir_tanggal',
        'mulai_waktu',
        'akhir_waktu',
        'konten',
        'jadwal_id',
        'pembuat_id_pengumuman',
        'iuran',
        'lokasi',
        'sent_at',
    ];

    public function penduduk() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'pembuat_id_pengumuman', 'penduduk_id');
    }

    public function jadwal() : BelongsTo
    {
        return $this->belongsTo(JadwalModel::class, 'jadwal_id', 'jadwal_id');
    }
}
