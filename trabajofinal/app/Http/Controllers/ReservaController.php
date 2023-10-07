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
            'dni' => 'required|string',
            'nombre' => 'required|string',
            'telefono' => 'required|string',
            'n_personas' => 'required|string', // Agregar validación para 'n_personas'
            'niños' => 'required|string', // Agregar validación para 'niños'
            'incluye' => 'required|string', // Agregar validación para 'incluye'
            'fecha' => 'required|date',
            'combo' => 'required|string',
        ]);
    
        // Genera un número de ticket único
        $ticket = strtoupper(uniqid());
    
        // Verifica si el ticket ya existe en la base de datos, y si es así, genera uno nuevo
        while (Cliente::where('ticket', $ticket)->exists()) {
            $ticket = strtoupper(uniqid());
        }
    
        // Crea el registro en la base de datos con el ticket único
        Cliente::create(array_merge($request->all(), ['ticket' => $ticket]));
    
        // No hay redirección aquí, simplemente se guarda en la base de datos.
    
        return back()->with('success', 'Reserva creada exitosamente pronto nos pondremos en contacto con el precio y mas informacion N°ticket: ' . $ticket);
    }
    

    
    public function search(Request $request)
    {
        // Obtén los parámetros de búsqueda
        $dni = $request->input('dni');
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $fecha = $request->input('fecha');
        $combo = $request->input('combo');
        $precio = $request->input('precio');
        $ticket = $request->input('ticket'); // Agrega el filtro por número de ticket
        $n_personas = $request->input('n_personas'); // Nuevo campo
        $niños = $request->input('niños'); // Nuevo campo
        $incluye = $request->input('incluye'); // Nuevo campo
    
        // Realiza la búsqueda en la base de datos
        $reservas = Cliente::when($dni, function ($query) use ($dni) {
            return $query->where('dni', 'like', '%' . $dni . '%');
        })->when($nombre, function ($query) use ($nombre) {
            return $query->where('nombre', 'like', '%' . $nombre . '%');
        })->when($telefono, function ($query) use ($telefono) {
            return $query->where('telefono', 'like', '%' . $telefono . '%');
        })->when($fecha, function ($query) use ($fecha) {
            return $query->where('fecha', $fecha);
        })->when($combo, function ($query) use ($combo) {
            return $query->where('combo', 'like', '%' . $combo . '%');
        })->when($precio, function ($query) use ($precio) {
            return $query->where('precio', $precio);
        })->when($ticket, function ($query) use ($ticket) { // Agrega la condición para el número de ticket
            return $query->where('ticket', 'like', '%' . $ticket . '%');
        })->when($n_personas, function ($query) use ($n_personas) { // Nuevo campo
            return $query->where('n_personas', 'like', '%' . $n_personas . '%');
        })->when($niños, function ($query) use ($niños) { // Nuevo campo
            return $query->where('niños', 'like', '%' . $niños . '%');
        })->when($incluye, function ($query) use ($incluye) { // Nuevo campo
            return $query->where('incluye', 'like', '%' . $incluye . '%');
        })->get();
    
        // Pasa la variable $reservas a la vista
        return view('ver', ['reservas' => $reservas]);
    }
    

}