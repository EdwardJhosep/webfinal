<?php

// routes/web.php

use App\Http\Controllers\MenuController;

// routes/web.php

Route::get('/', [MenuController::class, 'inicio']);
Route::get('/ver', [MenuController::class, 'ver']);
Route::get('/reservar', [MenuController::class, 'reservar']);
Route::get('/contacto', [MenuController::class, 'contacto']);
Route::get('/admin', [MenuController::class, 'admin']);

