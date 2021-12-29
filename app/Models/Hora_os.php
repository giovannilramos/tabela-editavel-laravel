<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora_os extends Model
{
    use HasFactory;

    protected $table = 'hora_os';

    protected $fillable = [
        'hora',
        'os',
        'id_planilha',
    ];
}
