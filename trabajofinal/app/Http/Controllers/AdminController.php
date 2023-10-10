<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Método para mostrar el formulario de inicio de sesión en admin.blade.php
    public function showLoginForm()
    {
        return view('admin');
    }

    // Método para procesar el inicio de sesión y redirigir a 'agregar.blade.php' si es exitoso
    public function login(Request $request)
    {
        // Lógica de autenticación aquí (verificar credenciales, etc.)
        // Si la autenticación es exitosa, redirige a 'agregar.blade.php'
        if ($request->email === 'juanantee@gmail.com' && $request->password === '75902205') {
            return redirect()->route('agregar');
        } else {
            return back()->withErrors([
                'email' => 'Las credenciales proporcionadas no son válidas.',
            ]);
        }
    }

    // Método para mostrar la vista 'agregar.blade.php'
    public function agregar()
    {
        return view('agregar');
    }
}
