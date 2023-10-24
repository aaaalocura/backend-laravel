<?php

use App\Http\Controllers\AspirantesController;
use App\Http\Controllers\CuestionarioController;

// Ruta para mostrar el formulario de datos
// Ruta para mostrar el formulario de datos
Route::get('/', [AspirantesController::class, 'index'])->name('aspirantes.index');

// Ruta para almacenar los datos del formulario
Route::post('/aspirantes', [AspirantesController::class, 'store'])->name('aspirantes.store');

// Rutas para el cuestionario y evaluación
Route::get('/cuestionario/{aspirante}', [CuestionarioController::class, 'show'])->name('cuestionario');
Route::post('/cuestionario/{aspirante}', [CuestionarioController::class, 'evaluate'])->name('cuestionario.evaluate');
Route::get('resultado', [CuestionarioController::class, 'result'])->name('resultado');



