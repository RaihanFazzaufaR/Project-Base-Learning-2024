<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanSuratSkKematianModel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_permintaansurat_sk_kematian';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'skKematian_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'nik',
        'nomor_kk',
        'tempat_lahir',
        'tanggal_lahir',
        'usia',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'warganegara',
        'alamat',
        'penyebab_kematian',
        'tempat_meninggal',
        'nama_pelapor',
        'hubungan_pelapor',
        'tanggal_wafat',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_wafat' => 'datetime',
    ];
}
