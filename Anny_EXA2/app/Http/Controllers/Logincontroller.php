<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    //
    public function showLogin()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        $dato = $request->validate([
            'usuario' => 'required|string',
            'password' => 'required'
        ]);

        if (Auth::attempt($dato)) {
            // Autenticación exitosa
            $request->session()->regenerate();
            return redirect()->route('equipo.index');
        } 

        return back()->withErrors([
            'usuario' => 'Las credenciales proporcionadas no son correctas.',
        ])->onlyInput('usuario');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
