<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist_install extends Model
{
    use HasFactory;

    protected $table = 'checklist_install';

    protected $casts = [
        'checklist_instalacao' => 'array',
    ];

    protected $fillable = [
        'id_planilha',
        'checklist_instalacao',
    ];
}
