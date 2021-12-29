<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempo_trabalho extends Model
{
    use HasFactory;

    protected $table = 'tempo_trabalho';

    protected $fillable = [
        'id_planilha',
        'inicio',
        'termino',
        't_a',
    ];
}
