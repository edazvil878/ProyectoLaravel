<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function mostrar()
    {
        return view('usuario.login');
    }

    public function validar(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $contrasena = $request->input('contrasena');

        if (Auth::attempt(['email' => $email, 'password' => $contrasena, 'nombre' => $nombre])) {
            // Authentication successful
            return redirect()->route('usuario.index');
        } else {
            // Authentication failed
            return back()->withErrors(['message' => 'Invalid credentials'])->withInput();
        }
    }

}
