<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SuratModel extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'tb_surat';

    // Specify the primary key if it doesn't follow Laravel's naming convention
    protected $primaryKey = 'surat_id';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'peminta_id',
        'minta_tanggal',
        'status',
        'keperluan',
        'template_id',
        'tempatLahir',
        'tanggalLahir',
        'jenisKelamin',
        'statusNikah',
        'nik',
        'nikeluarga',
        'warganegara',
        'agama',
        'pekerjaan',
        'alamat',
        'penyebab_kematian',
        'tempat_meninggal',
        'nama_pelapor',
        'hubungan_pelapor',
        'tanggal_wafat',
        'alamat_pindah',
        'alasan_pindah',
        'jumlah_keluarga_pindah'
    ];

    // Define relationships if needed
    public function peminta() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'peminta_id', 'id_penduduk');
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(TemplateModel::class, 'template_id', 'template_id');
    }
}
