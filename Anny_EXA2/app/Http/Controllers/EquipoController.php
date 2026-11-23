<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EquipoController extends Controller
{
    //
    public function index()
    {
        $equipo = Equipo::all();

        return view('equipo.index', compact('equipo'));
    }

    public function create()
    {
        return view('equipo.create');
    }

    public function store(Request $request)
    {
        $dato= $request->validate([
            'codigo' => 'required|string|max:100|unique:equipos,codigo',
            'nombre' => 'required|string|max:100',
            'marca' => 'required|string|max:80',
            'fecha_adquisicion' => 'required|date|before_or_equal:today',
            'estado' => 'required|in:disponible,asignado,mantenimiento',
        ]);

        Equipo::create($dato);

        return redirect()->route('equipo.index') ->with('success', 'Equipo creado exitosamente.');
    }

    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipo.edit', compact('equipo'));
    }   

    public function update(Request $request, $id)
    {
        $equipo = Equipo::findOrFail($id);

        $dato= $request->validate([
            'codigo' => 'required|string|max:100|unique:equipos,codigo,' . $equipo->id,
            'nombre' => 'required|string|max:100',
            'marca' => 'required|string|max:80',
            'fecha_adquisicion' => 'required|date|before_or_equal:today',
            'estado' => 'required|in:disponible,asignado,mantenimiento',
        ]);

        $equipo->update($dato);

        return redirect()->route('equipo.index')->with('success', 'Equipo actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();

        return redirect()->route('equipo.index')->with('success', 'Equipo eliminado exitosamente.');
    }
    

    
}
