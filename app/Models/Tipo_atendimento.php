<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_atendimento extends Model
{
    use HasFactory;

    protected $table = 'tipo_atendimento';

    protected $fillable = [
        'id_planilha',
        'tipo_atendimento',
    ];
}
