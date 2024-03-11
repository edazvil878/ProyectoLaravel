<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntasExamenes extends Model
{
    use HasFactory;

    protected $fillable = [
        'enunciado',
        'opciones_respuesta',
        'respuesta_correcta',
    ];
}
