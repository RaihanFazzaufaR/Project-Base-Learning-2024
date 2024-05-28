<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanSuratSkModel extends Model
{
    use HasFactory;

    protected $table = 'tb_permintaansurat_sk'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'no_ktp',
        'alamat',
        'keperluan',
    ];
}
