<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examenTienePreguntas extends Model
{
    use HasFactory;

    protected $fillable = [
        'examen_id',
        'pregunta_id',
    ];
}
