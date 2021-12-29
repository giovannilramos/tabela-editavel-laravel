<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

    protected $table = 'tecnico';

    protected $fillable = [
        'id_planilha',
        'nome',
        'assinatura',
    ];
}
