<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trac extends Model
{
    use HasFactory;

    protected $table = 'trac';

    protected $fillable = [
        'id_planilha',
        'trac',
    ];
}
