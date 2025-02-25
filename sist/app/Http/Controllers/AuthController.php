<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function verificarRol()
    {
        $usuario = Auth::user();
        
        if (!$usuario) {
            return response()->json(['message' => 'No autenticado'], 401);
        }
        
        if ($usuario->rol === 'admin') {
            return redirect()->route('admin');
        }
        
        return redirect()->route('index');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'usuario' => 'required|string|max:255',
            'contraseña' => 'required|string',
        ]);

        // Intentar autenticar al usuario usando el campo 'usuario'
        $credentials = [
            'usuario' => $request->input('usuario'),
            'password' => $request->input('contraseña'),
        ];

        if (Auth::attempt($credentials)) {
            // Verificar el rol después de la autenticación
            return $this->verificarRol();
        } else {
            // Si la autenticación falla
            return redirect()->back()->withErrors(['usuario' => 'Las credenciales no coinciden.']);
        }
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login2')->with('success', 'Sesión cerrada.');
    }
}