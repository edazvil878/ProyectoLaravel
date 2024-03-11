<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registroController extends Controller
{

    public function mostrar()
    {
        return view('usuario.registro');
    }

    public function validar(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $contrasena = $request->input('contrasena');

        $usuarios = new Usuario();
        $usuarios->nombre = $nombre;
        $usuarios->email = $email;
        $usuarios->contrasena = Hash::make($contrasena);
        $usuarios->save();

        return redirect()->route("login.mostrar");

    }
}
