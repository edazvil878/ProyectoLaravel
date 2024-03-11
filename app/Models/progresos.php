<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progresos extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'curso_id',
        'porcentaje_completado',
        'ultima_leccion_completada',
    ];
}
