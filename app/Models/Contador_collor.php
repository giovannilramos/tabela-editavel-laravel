<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contador_collor extends Model
{
    use HasFactory;

    protected $table = 'contador_collor';

    protected $fillable = [
        'id_planilha',
        'contador_collor',
    ];
}
