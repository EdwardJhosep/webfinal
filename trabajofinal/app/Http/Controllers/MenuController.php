<?php
// app/Http/Controllers/MenuController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function inicio()
    {
        return view('welcome');
    }

    public function ver()
    {
        return view('ver');
    }

    public function reservar()
    {
        return view('reservar');
    }

    public function contacto()
    {
        return view('contacto');
    }
    public function admin()
    {
        return view('admin');
    }
}
