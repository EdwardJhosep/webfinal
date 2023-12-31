<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combo; // Importa el modelo Combo

class ComboController extends Controller
{
    /**
     * Método para mostrar el formulario de agregar combos.
     *
     * @return \Illuminate\View\View
     */
    public function mostrarFormulario()
    {
        return view('agregar');
    }
    
    public function agregarCombo(Request $request)
    {
        // Validar y guardar los datos del combo en la base de datos
        $data = $request->validate([
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'dias' => 'required|integer',
            'incluye' => 'required|string',
            'imagen' => 'nullable|image', // Asegúrate de que 'imagen' sea una imagen
        ]);
    
        // Manejar la subida de la imagen (si se ha cargado)
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('public/imagenes_combo');
            $data['imagen'] = $imagenPath;
        }
    
        // Crear un nuevo registro de combo en la base de datos
        Combo::create($data);
    
        // Puedes redirigir a donde desees después de guardar
        return redirect()->route('agregar.combo.form')->with('success', 'Combo agregado con éxito');
      
    }
    public function obtenerCombos()
    {
        $combos = Combo::all(); // Obtener todos los combos

        return view('reservar', compact('combos')); // Pasar los combos a la vista
    }
    public function listarCombos()
    {
        $combos = Combo::all();
        return view('agregar', compact('combos'));
    }

    public function eliminarCombo($id)
    {
        // Obtener el combo que se va a eliminar por su ID
        $combo = Combo::find($id);

        // Verificar si el combo existe
        if ($combo) {
            // Eliminar el combo
            $combo->delete();
            return redirect()->route('agregar.combo.form')->with('success', 'Combo eliminado con éxito');
        }

        return redirect()->route('agregar.combo.form')->with('error', 'Combo no encontrado');
    }
}
