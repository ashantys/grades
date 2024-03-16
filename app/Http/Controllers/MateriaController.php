<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();
        return view('materias.index', compact('materias'));
    }

    public function create()
    {
        return view('materias.create');
    }

    public function show($id)
    {
        // Obtén todas las actividades de la materia con el id específico
        $actividades = Actividad::where('materia_id', $id)->get();

        return view('materias.show', compact('actividades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $materia = new Materia();
        $materia->nombre = $request->nombre;

        $materia->save();

        return redirect()->route('materias.index')->with('success', 'Materia creada exitosamente');
    }

    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.edit', compact('materia'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Materia::whereId($id)->update($validatedData);

        return redirect()->route('materias.index')->with('success', 'Materia actualizado correctamente.');
    }

    public function destroy($id)
    {
        $materia = Materia::findOrFail($id);
        $materia->delete();

        return redirect()->route('materias.index')->with('success', 'Materia eliminada correctamente.');
    }
}
