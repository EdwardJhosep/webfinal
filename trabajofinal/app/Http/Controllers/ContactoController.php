<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    // Método para mostrar el formulario de contacto
    public function showForm()
    {
        return view('contacto'); // Reemplaza 'contacto' con el nombre de tu vista Blade correspondiente
    }

    // Método para procesar el envío del formulario de contacto
    public function enviarFormulario(Request $request)
    {
        // Aquí puedes agregar la lógica para procesar el formulario
        // Por ejemplo, puedes validar los datos y enviar un correo electrónico, etc.

        // Redirige a una página de éxito o muestra un mensaje de éxito
        return redirect()->route('contacto')->with('success', '¡El formulario se ha enviado con éxito!');
    }

    // Método para mostrar la página de inicio
    public function showInicio()
    {
        return view('welcome'); // Reemplaza 'inicio' con el nombre de tu vista Blade correspondiente
    }

    // Método para mostrar la página de reservas
    public function showReservar()
    {
        return view('reservar'); // Reemplaza 'reservar' con el nombre de tu vista Blade correspondiente
    }

    // Método para mostrar la página de inicio de sesión (login)
    public function showLogin()
    {
        return view('login'); // Reemplaza 'login' con el nombre de tu vista Blade correspondiente
    }
}
