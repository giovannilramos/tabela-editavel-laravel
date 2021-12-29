<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pecas extends Model
{
    use HasFactory;

    protected $table = 'pecas';

    protected $casts = [
        'codigo_pecas' => 'array',
        'descricao_pecas' => 'array',
        'qtd_pecas' => 'array',
        'condicao_pecas' => 'array',
        'tipo_pecas' => 'array',
    ];

    protected $fillable = [
        'id_planilha',
        'codigo_pecas',
        'descricao_pecas',
        'qtd_pecas',
        'condicao_pecas',
        'tipo_pecas',
    ];
}
