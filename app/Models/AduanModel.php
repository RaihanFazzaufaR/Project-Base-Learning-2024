<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AduanModel extends Model
{
    use HasFactory;

    protected $table = 'tb_aduan';

    protected $primaryKey = 'aduan_id';

    protected $fillable = [
        'aduan_id',
        'judul',
        'pengadu_id',
        'konten_aduan',
        'image',
        'prioritas',
        'status',
        'dibuat_tanggal'
    ];

    public function penduduk() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'pengadu_id', 'id_penduduk');
    }

    public function respon() : HasMany
    {
        return $this->hasMany(ResponModel::class, 'aduan_id', 'aduan_id');
    }

}
