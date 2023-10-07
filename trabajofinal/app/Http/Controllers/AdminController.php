<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        // Muestra el formulario de inicio de sesión para administradores
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Valida los datos del formulario de inicio de sesión
        $request->validate([
            'nombre' => 'required|string',
            'contrasena' => 'required|string',
        ]);

        // Intenta iniciar sesión con los datos proporcionados
        if (Auth::attempt(['nombre' => $request->input('nombre'), 'password' => $request->input('contrasena')])) {
            // Si el inicio de sesión tiene éxito, redirecciona a la página de administrador
            return redirect()->route('admin.index');
        }

        // Si el inicio de sesión falla, redirecciona de nuevo al formulario de inicio de sesión con un mensaje de error
        return back()->with('error', 'Credenciales incorrectas');
    }

    public function logout()
    {
        // Cierra la sesión del administrador y redirecciona a la página de inicio
        Auth::logout();
        return redirect()->route('inicio');
    }
}
