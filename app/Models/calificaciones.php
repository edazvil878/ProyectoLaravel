<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calificaciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'examen_id',
        'puntuacion_obtenida',
    ];
}
