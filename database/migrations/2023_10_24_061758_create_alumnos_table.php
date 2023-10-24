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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Apellido_2')->nullable();
            $table->string('Grado')->nullable();
            $table->string('Escuela')->nullable();
            $table->string('Grupo')->nullable();
            $table->unsignedBigInteger('padre_id');
            $table->timestamps();
            
            $table->foreign('padre_id')->references('id')->on('padres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
