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
    protected $keyType = 'bigint';
    public $timestamps = false;

    protected $fillable = [
        'peminta_id',
        'minta_tanggal',
        'status',
        'tujuan_id',
        'keperluan',
        'template_id'
    ];

    public function peminta()
    {
        return $this->belongsTo(PendudukModel::class, 'peminta_id', 'id_penduduk');
    }

    public function template()
    {
        return $this->belongsTo(TemplateModel::class, 'template_id', 'template_id');
    }

    public function dataSurat()
    {
        return $this->hasMany(DataSuratModel::class, 'permintaan_id', 'permintaan_id');
    }
}
