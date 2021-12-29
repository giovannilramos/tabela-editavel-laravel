<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_scalt extends Model
{
    use HasFactory;

    protected $table = 'tipo_scalt';

    protected $fillable = [
        'id_planilha',
        'nomes',
    ];

    public function relScalt() {
        return $this->hasOne('App\Models\Scalt', 'id_tipo', 'id');
    }
}
