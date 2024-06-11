<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TemplateModel extends Model
{
    use HasFactory;

    protected $table = 'tb_template';

    protected $primaryKey = 'template_id';

    protected $fillable = [
        'jenisSurat',
        'template_path',
    ];

    public function surat() : HasMany
    {
        return $this->hasMany(SuratModel::class, 'template_id', 'template_id');
    }
}
