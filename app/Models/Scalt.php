<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scalt extends Model
{
    use HasFactory;

    protected $table = 'scalt';

    protected $casts = [
        'codigo_problema' => 'array',
        'comentario' => 'array'
    ];

    protected $fillable = [
        'id_planilha',
        'id_tipo',
        'codigo_problema',
        'comentario',
    ];

    public function relTipo() {
        return $this->hasMany('App\Models\Tipo_scalt', 'id');
    }
}
