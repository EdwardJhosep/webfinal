<?php


// routes/web.php
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\AdminController; // Importa el controlador AdminController

// Rutas para el controlador MenuController
Route::get('/', [MenuController::class, 'inicio']);
Route::get('/ver', [MenuController::class, 'ver']);
Route::get('/reservar', [MenuController::class, 'reservar']);
Route::get('/contacto', [MenuController::class, 'contacto']);
Route::get('/admin', [MenuController::class, 'admin']);

Route::get('/reservas/search', [ReservaController::class, 'search'])->name('reservas.search');
// Ruta para procesar el formulario de reserva y redirigir a 'reservar'
Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');

// Rutas para el controlador AdminController
Route::get('/admin', [AdminController::class, 'showLoginForm'])->name('admin'); // Muestra el formulario de inicio de sesión
Route::post('/agregar', [AdminController::class, 'agregar'])->name('agregar'); // Procesa el inicio de sesión


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComboController;

// Ruta para mostrar el formulario de agregar combos
Route::get('/agregar-combo', [ComboController::class, 'mostrarFormulario'])->name('agregar.combo.form');
Route::post('/agregar-combo', [ComboController::class, 'agregarCombo'])->name('agregar.combo');

// Ruta para cerrar sesión y redirigir a admin.blade.php
Route::post('/logout', function (Request $request) {
    Auth::logout();
    return redirect('/admin'); // Redirige a la página admin.blade.php
})->name('logout');


Route::get('/editar-combo/{id}', [ComboController::class, 'editarCombo'])->name('editar.combo');
Route::post('/eliminar-combo/{id}', [ComboController::class, 'eliminarCombo'])->name('eliminar.combo');

Route::get('/reservar', [ComboController::class, 'obtenerCombos'])->name('reservar.combos');



// Ruta para mostrar el formulario de inicio de sesión
Route::get('/admin', [AdminController::class, 'showLoginForm'])->name('admin.login.form');

// Ruta para procesar el inicio de sesión
Route::post('/admin', [AdminController::class, 'login'])->name('admin.login');

// Ruta para mostrar la vista 'agregar.blade.php' después del inicio de sesión exitoso
Route::get('/agregar', [AdminController::class, 'agregar'])->name('agregar');



// Ruta para mostrar el formulario de agregar combos y listar los combos
Route::get('/agregar', [ComboController::class, 'listarCombos'])->name('agregar.combo.form');




Route::get('/agregar-combo', [ComboController::class, 'mostrarFormulario'])->name('agregar.combo.form');
Route::post('/agregar-combo', [ComboController::class, 'agregarCombo'])->name('agregar.combo');
Route::get('/editar-combo/{id}', [ComboController::class, 'editarCombo'])->name('editar.combo');
Route::get('/eliminar-combo/{id}', [ComboController::class, 'eliminarCombo'])->name('eliminar.combo');
