<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ReservaController extends Controller
{
    public function create()
    {
        return view('reservas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'telefono' => 'required|string',
            'año' => 'required|string',
            'mes' => 'required|string',
            'combo' => 'required|string',
            'precio' => 'required|numeric',
        ]);
    
        Cliente::create($request->all());
    
        // No hay redirección aquí, simplemente se guarda en la base de datos.
    
        return back()->with('success', 'Reserva creada exitosamente.'); // Opcional: Puedes redirigir de vuelta a la página anterior.
    }
    
}