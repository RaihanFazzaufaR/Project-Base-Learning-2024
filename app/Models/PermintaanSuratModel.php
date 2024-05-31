<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanSuratModel extends Model
{
    use HasFactory;

    protected $table = 'tb_permintaansurat';
    protected $primaryKey = 'permintaan_id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'peminta_id',
        'minta_tanggal',
        'status',
        'keperluan',
        'file',
        'template_id' // Removed 'jenisSurat' and added 'template_id'
    ];

    /**
     * Get the peminta associated with the PermintaanSuratModel
     */
    public function peminta()
    {
        return $this->belongsTo(PendudukModel::class, 'peminta_id', 'id_penduduk');
    }

    /**
     * Get the dataSurat associated with the PermintaanSuratModel
     */
    public function dataSurat()
    {
        return $this->hasMany(DataSuratModel::class, 'permintaan_id', 'permintaan_id');
    }
}
