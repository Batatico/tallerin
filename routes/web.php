<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function() {
    //Rutas que solo pueden ser accedidas por los usuarios "auth"
      Route::get('/user',[AdminController::class, 'index'])->name('admin_index');
    //
    //Route::get('/vistaAlumno',[AlumnoController::class, 'index'])->name('alumno_index');
    //Route::get('/vistaDocente',[DocenteController::class, 'index'])->name('docente_index');
   // Route::get('/vistaAyudante',[AyudanteController::class, 'index'])->name('ayudante_index');
    // aqui comento
});


