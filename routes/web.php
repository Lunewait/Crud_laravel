<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::resource('articulos', ArticuloController::class);
// Ruta para listar los artículos
Route::get('articulos', [ArticuloController::class, 'index'])->name('articulos.index');

// Ruta para mostrar el formulario de creación de un nuevo artículo
Route::get('articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');

// Ruta para almacenar un nuevo artículo
Route::post('articulos', [ArticuloController::class, 'store'])->name('articulos.store');

// Ruta para mostrar un artículo específico
Route::get('articulos/{articulo}', [ArticuloController::class, 'show'])->name('articulos.show');

// Ruta para mostrar el formulario de edición de un artículo existente
Route::get('articulos/{articulo}/edit', [ArticuloController::class, 'edit'])->name('articulos.edit');

// Ruta para actualizar un artículo existente
Route::put('articulos/{articulo}', [ArticuloController::class, 'update'])->name('articulos.update');

// Ruta para eliminar un artículo
Route::delete('articulos/{articulo}', [ArticuloController::class, 'destroy'])->name('articulos.destroy');