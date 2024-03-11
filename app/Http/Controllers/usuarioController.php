<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email|unique:usuarios|max:255',
            'contrasena' => 'required|max:255',
        ]);

        $input['contrasena'] = Hash::make($request->contrasena);

        Usuario::create($input);
        return redirect()->route('usuario.index')
            ->with('success', 'Usuario created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuarios = Usuario::findOrFail($id);
        return view('usuario.show', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);
        $usuario = Usuario::find($id);
        $usuario->update($request->all());
        return redirect()->route('usuario.index')
            ->with('success', 'Usuario updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuarios = Usuario::find($id);
        $usuarios->delete();
        return redirect()->route('usuario.index')
            ->with('success', 'Usuario deleted successfully');
    }

    public function create()
    {
        return view('usuario.create');
    }


    public function edit(string $id)
    {

        //Cargamos el alumno correspondiente
        $usuario = Usuario::find($id);

        return view('usuario.edit', [
            'usuario' => $usuario
        ]);
    }

}
