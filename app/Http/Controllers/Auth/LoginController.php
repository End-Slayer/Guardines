<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('correo_electronico', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->intended('inicio'); // Cambia 'home' por la ruta a la que deseas redirigir
        }

        // Si falla la autenticación
        return back()->withErrors([
            'correo_electronico' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }
}
