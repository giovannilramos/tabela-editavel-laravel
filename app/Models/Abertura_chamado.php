<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abertura_chamado extends Model
{
    use HasFactory;

    protected $table = 'abertura_chamado';

    protected $fillable = [
        'id_planilha',
        'empresa',
        'contato',
        'depto',
        'endereco',
        'cidade',
        'tel',
        'bairro',
        'data_atendimento',
        'hr_chegada',
    ];
}
