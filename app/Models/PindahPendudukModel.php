<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PindahPendudukModel extends Model
{
    use HasFactory;

    protected $table = 'tb_pindahpenduduk';
    protected $primaryKey = 'id_PindahPenduduk';
    protected $fillable = [
        'id_foreign_penduduk',
        'id_foreign_surat',
        'id_foreign_kk',
    ];

    public function penduduk(): BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'id_foreign_penduduk', 'id_penduduk');
    }

    public function surat(): BelongsTo
    {
        return $this->belongsTo(SuratModel::class, 'id_foreign_surat', 'surat_id');
    }

    public function kartuKeluarga(): BelongsTo
    {
        return $this->belongsTo(KartuKeluargaModel::class, 'id_foreign_kk', 'id_kartuKeluarga');
    }
}
