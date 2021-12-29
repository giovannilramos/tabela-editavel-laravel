<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deslocamento extends Model
{
    use HasFactory;

    protected $table = 'deslocamento';

    protected $fillable = [
        'id_planilha',
        'inicial',
        'final',
        't_d',
    ];
}
