<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


// Ruta para mostrar el formulario de contacto
Route::get('/contacto', [ContactoController::class, 'showForm'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'enviarFormulario']);

// Rutas para las nuevas páginas
Route::get('/', [ContactoController::class, 'showInicio'])->name('inicio');
Route::get('/reservar', [ContactoController::class, 'showReservar'])->name('reservar');
Route::get('/login', [ContactoController::class, 'showLogin'])->name('login');

Route::get('/', function () {
    return view('welcome'); // Esta es la ruta para la página de bienvenida
    
});
Route::get('/inicio', [ContactoController::class, 'showInicio'])->name('inicio');
