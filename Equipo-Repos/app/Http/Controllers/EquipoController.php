<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use Illiminate\Support\Facades\auth;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $equipo = Equipo::all();
        return view('equipo.index', compact('equipo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $datos = $request->validate([
        'codigo' => 'required|string|max:30|unique:equipos,codigo',
        'nombre' => 'required|string|max:100',
        'marca' => 'required|string|max:80',
        'fecha_adquisicion' => 'required|date|before:tomorrow',
        'estado' => 'required|in:disponible,asignado,mantenimiento',
     ]);

        Equipo::create($datos);

        return redirect()->route('equipo.index')
            ->with('success', 'Equipo registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         $equipo = Equipo::findOrFail($id);

        return view('equipo.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $equipo = Equipo::findOrFail($id);

         $datos = $request->validate([
            'codigo' => 'required|string|max:30|unique:equipos,codigo,' . $id,
            'nombre' => 'required|string|max:100',
            'marca' => 'required|string|max:80',
            'fecha_adquisicion' => 'required|date|before:tomorrow',
            'estado' => 'required|in:disponible,asignado,mantenimiento',
        ]);

        $equipo->update($datos);

        return redirect()->route('equipo.index')
          ->with('success', 'Equipo actualizado correctamente.');
         }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
