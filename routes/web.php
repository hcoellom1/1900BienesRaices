<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PropiedadController::class, 'index'])->name('propiedad.home');

Route::get('/propiedades/crear', [PropiedadController::class, 'create'])->name('propiedad.create');

Route::post('/propiedades/guardar', [PropiedadController::class, 'store'])->name('propiedad.store');

Route::get('/propiedad/editar/{id}',[PropiedadController::class, 'editar'])->name('propiedad.edit');

Route::get('/propiedad/eliminar/{id}', [PropiedadController::class, 'eliminar'])->name('propiedad.eliminar');

Route::put('/propiedad/actualizar/{id}', [PropiedadController::class, 'actualizar'])->name('propiedad.actualizar');

Route::get('/propiedad/destroy/{id}', [PropiedadController::class, 'destroy'])->name('propiedad.destroy');

//Verbos http
//get mostrar o acceder
//post guardar
//put actualizar
//delete eliminar