<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

/* MATERIA */

// Ruta para mostrar el listado de materias (índice)
Route::get('/', [MateriaController::class, 'index'])->name('materias.index');

// Ruta para mostrar el formulario de creación
Route::get('/create', [MateriaController::class, 'create'])->name('materias.create');

// Ruta para almacenar (store) los datos enviados desde el formulario de creación
Route::post('/store', [MateriaController::class, 'store'])->name('materias.store');

//Ruta para mostrar los detalles de una materia específico
Route::get('/show/{id}', [MateriaController::class, 'show'])->name('materias.show');

// Ruta para mostrar el formulario de edición de una materia específico
Route::get('/edit/{id}', [MateriaController::class, 'edit'])->name('materias.edit');

// Ruta para actualizar una materia específico
Route::put('/update/{id}', [MateriaController::class, 'update'])->name('materias.update');

//Ruta para eliminar una materia en específico
Route::delete('/materias/{id}', [MateriaController::class, 'destroy'])->name('materias.destroy');

/* ACTIVIDAD */


