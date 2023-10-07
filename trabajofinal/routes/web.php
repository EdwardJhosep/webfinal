<?php

// routes/web.php
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservaController;

// Rutas para el controlador MenuController
Route::get('/', [MenuController::class, 'inicio']);
Route::get('/ver', [MenuController::class, 'ver']);
Route::get('/reservar', [MenuController::class, 'reservar']);
Route::get('/contacto', [MenuController::class, 'contacto']);
Route::get('/admin', [MenuController::class, 'admin']);

Route::get('/reservas/search', [ReservaController::class, 'search'])->name('reservas.search');



// Ruta para procesar el formulario de reserva y redirigir a 'reservar'
Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');

