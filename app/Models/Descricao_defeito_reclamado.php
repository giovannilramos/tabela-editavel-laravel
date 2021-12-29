<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descricao_defeito_reclamado extends Model
{
    use HasFactory;

    protected $table = 'descricao_defeito_reclamado';

    protected $fillable = [
        'desc_defeito_reclam',
        'id_planilha',
    ];
}
