<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Http\Controllers\Controller;
use App\Models\Lecciones;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = curso::all();
        return view('curso.index', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'dificultad' => 'required|max:255',
            'duracion' => 'required|max:255',
        ]);
        curso::create($request->all());
        return redirect()->route('curso.index')
            ->with('success', 'curso created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cursos = curso::findOrFail($id);
        $lecciones = Lecciones::all();
        $leccion = "";
        for ($i = 0; $i < count($lecciones); $i++) {
            if ($lecciones[$i]["curso_id"] == $id) {
                $leccion = $lecciones[$i];
            }

        }
        return view('curso.show', compact('cursos', "leccion"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'dificultad' => 'required|max:255',
            'duracion' => 'required|max:255',
        ]);
        $curso = curso::find($id);
        $curso->update($request->all());
        return redirect()->route('curso.index')
            ->with('success', 'curso updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cursos = curso::find($id);
        $cursos->delete();
        return redirect()->route('curso.index')
            ->with('success', 'curso deleted successfully');
    }

    public function create()
    {
        return view('curso.create');
    }

    public function edit(string $id)
    {

        //Cargamos el alumno correspondiente
        $curso = curso::find($id);

        return view('curso.edit', [
            'curso' => $curso
        ]);
    }
}
