<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RekomendasiPenerimaModel extends Model
{
    use HasFactory;

    protected $table = 'tb_rekomendasipenerima';

    protected $primaryKey = 'rekomendasi_id';

    protected $fillable = [
        'id_kartuKeluarga',
        'ranking'
    ];

    public function kartuKeluarga() : BelongsTo
    {
        return $this->belongsTo(KartuKeluargaModel::class, 'id_kartuKeluarga', 'id_kartuKeluarga');
    }
}
