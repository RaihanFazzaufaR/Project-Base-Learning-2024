<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BansosModel extends Model
{
    use HasFactory;

    protected $table = 'tb_bansos';

    protected $primaryKey = 'bansos_id';

    protected $fillable = [
        'penerima_id',
        'penerimaan_tanggal',
        'diterima_tanggal',
        'penyelenggara',
        'pengambil_id',
    ];

    public function penduduk() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'penerima_id', 'id_penduduk');
    }

    public function kartuKeluarga() : BelongsTo
    {
        return $this->belongsTo(KartuKeluargaModel::class, 'pengambil_id', 'id_kartuKeluarga');
    }
}
