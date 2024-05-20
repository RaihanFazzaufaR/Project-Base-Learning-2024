<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResponModel extends Model
{
    use HasFactory;

    protected $table = 'tb_respon';

    protected $primaryKey = 'respon_id';

    protected $fillable = [
        'aduan_id',
        'perespon_id',
        'konten_respon',
        'image',
        'dibuat_tanggal'
    ];

    public function aduan() : BelongsTo
    {
        return $this->belongsTo(AduanModel::class, 'aduan_id', 'aduan_id');
    }

    public function penduduk() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'perespon_id', 'id_penduduk');
    }
}
