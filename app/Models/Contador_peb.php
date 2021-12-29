<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contador_peb extends Model
{
    use HasFactory;
    
    protected $table = 'contador_peb';

    protected $fillable = [
        'id_planilha',
        'contador_peb',
    ];
}
