<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condicao_final extends Model
{
    use HasFactory;

    protected $table = 'condicao_final';

    protected $fillable = [
        'id_planilha',
        'condicao_final',
    ];
}
