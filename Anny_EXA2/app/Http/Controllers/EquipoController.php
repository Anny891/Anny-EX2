<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    //
    public function index()
    {
        $equipo = Equipo::all();

        return view('equipo.index', compact('equipo'));
    }
}
