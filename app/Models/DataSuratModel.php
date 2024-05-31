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
    protected $keyType = 'unsignedBigInteger';
    public $timestamps = false;
    protected $casts = [
        'data_id' => 'int', // Menentukan bahwa kolom 'data_id' adalah integer
        // Tambahkan penentuan tipe data lainnya jika diperlukan untuk kolom lain
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
        'alamat'
    ];
    public function permintaanSurat()
    {
        return $this->belongsTo(PermintaanSuratModel::class, 'permintaan_id', 'permintaan_id');
    }
}
