<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{

    public function create($id)
    {
        $materia = $id;
        return view('actividades.create', compact('materia'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'materia_id' => 'required|exists:materias,id',
            'tipo' => 'required|string',
            'calificacion' => 'nullable|numeric',
            'fecha' => 'required|date',
        ]);

        $actividad = new Actividad();
        $actividad->materia_id = $request->materia_id;
        $actividad->tipo = $request->tipo;
        $actividad->calificacion = $request->calificacion;
        $actividad->fecha = $request->fecha;
        
        $actividad->save();
    
        return redirect()->route('materias.index')->with('success', 'Actividad creada exitosamente');
    }

    public function edit($id)
    {
        $actividad = Actividad::find($id);
        return view('actividades.edit', compact('actividad'));
    }

    public function update(Request $request, $id)
    {
        $actividad = Actividad::find($id);
        $request->validate([
            'tipo' => 'required|string',
            'calificacion' => 'nullable|numeric',
            'fecha' => 'required|date',
        ]);
        $actividad->tipo = $request->tipo;
        $actividad->calificacion = $request->calificacion;
        $actividad->fecha = $request->fecha;
        
        $actividad->save();
    
        return redirect()->route('materias.index')->with('success', 'Actividad actualizada exitosamente');
    }

    public function destroy($id)
    {
        Actividad::destroy($id);
        return redirect()->route('materias.index')->with('sucess', 'Actividad eliminada existosamente');
    }
}
