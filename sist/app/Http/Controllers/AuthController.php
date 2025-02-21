<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login2'); // Usa la vista subida
    }
    

    public function login(Request $request)
    {
        
       // dd($request->all()); 
        // Adaptar las credenciales para el intento de autenticación
        $credentials = [
            'usuario' => $request->input('usuario'),
            'password' => $request->input('contraseña'), // Laravel espera 'password' aquí
        ];
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('index')->with('success', 'Bienvenido');
        }
        
        return back()->withErrors(['usuario' => 'Credenciales incorrectas']);
        
        
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Sesión cerrada.');
    }
    
}