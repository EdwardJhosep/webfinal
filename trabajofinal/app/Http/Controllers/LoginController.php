<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // ... Otros métodos ...

    /**
     * Método para cerrar sesión del usuario.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión del usuario actual
        $request->session()->invalidate(); // Invalida la sesión
        $request->session()->regenerateToken(); // Regenera el token CSRF

        return redirect('/admin'); // Redirige a la página de inicio o a donde desees
    }
}
