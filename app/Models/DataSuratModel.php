<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSuratModel extends Model
{
    use HasFactory;

    protected $table = 'tb_datasurat';
    protected $primaryKey = 'data_id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $casts = [
        'data_id' => 'int',
        'tanggalLahir' => 'date',
        'jenisKelamin' => 'string',
        'statusNikah' => 'string',
        'nik' => 'string',
        'nikeluarga' => 'string',
        'warganegara' => 'string',
        'agama' => 'string',
        'pekerjaan' => 'string',
        'alamat' => 'string',
        'penyebab_kematian' => 'string',
        'tempat_meninggal' => 'string',
        'nama_pelapor' => 'string',
        'hubungan_pelapor' => 'string',
        'tanggal_wafat' => 'datetime',
        'tempatLahir' => 'string', // Menambah properti tempatLahir
        'alamat_pindah' => 'string', // Added alamat_pindah
        'alasan_pindah' => 'string', // Added alasan_pindah
        'jumlah_keluarga_pindah' => 'int', // Added jumlah_keluarga_pindah
    ];
    protected $fillable = [
        'permintaan_id',
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
        'tempatLahir', // Menambah properti tempatLahir ke dalam fillable
        'alamat_pindah', // Added alamat_pindah ke dalam fillable
        'alasan_pindah', // Added alasan_pindah ke dalam fillable
        'jumlah_keluarga_pindah', // Added jumlah_keluarga_pindah ke dalam fillable
    ];

    public function permintaanSurat()
    {
        return $this->belongsTo(PermintaanSuratModel::class, 'permintaan_id', 'permintaan_id');
    }
}
