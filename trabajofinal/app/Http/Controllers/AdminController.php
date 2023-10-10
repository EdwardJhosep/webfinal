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
    
        // Método para procesar el inicio de sesión y redirigir a 'agregar.blade.php'
        public function login(Request $request)
        {
            // Lógica de autenticación aquí (verificar credenciales, etc.)
            
            // Si la autenticación es exitosa, redirige a 'agregar.blade.php'
            return view('agregar');
        }
    
        // Método para mostrar la vista 'agregar.blade.php'
        public function agregar()
        {
            return view('agregar');
        }
    }
    