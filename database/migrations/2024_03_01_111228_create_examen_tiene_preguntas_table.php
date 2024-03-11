<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('examen_tiene_preguntas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('examen_id');
            $table->unsignedBigInteger('pregunta_id');
            $table->timestamps();

            // Foreign key
            $table->foreign('examen_id')->references('id')->on('examenes')->onDelete('cascade');
            $table->foreign('pregunta_id')->references('id')->on('preguntas_examenes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_tiene_preguntas');
    }
};
