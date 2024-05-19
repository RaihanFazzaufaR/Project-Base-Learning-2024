<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmKategoriModel extends Model
{
    use HasFactory;

    protected $table = 'tb_umkm_kategori';
    protected $primaryKey = 'umkm_kategori_id';
    protected $fillable = [
        'umkm_id',
        'kategori_id',
    ];

    public function umkm()
    {
        return $this->belongsTo(UmkmModel::class, 'umkm_id', 'umkm_id');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
}