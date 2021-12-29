<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist_manutencao extends Model
{
    use HasFactory;

    protected $table = 'checklist_manutencao';

    protected $casts = [
        'checklist_manutencao' => 'array',
    ];

    protected $fillable = [
        'id_planilha',
        'checklist_manutencao',
    ];
}
