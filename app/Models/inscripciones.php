<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'curso_id',
        'fecha_inscripcion',
    ];
}
