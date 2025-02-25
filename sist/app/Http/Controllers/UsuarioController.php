<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function agregarUsuario(Request $request) {
        // Validación de los datos del formulario
         // Validación de los datos del formulario
         $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'usuario' => 'required|string|max:255|unique:usuarios,usuario',  // Validar que el usuario sea único
            'email' => 'required|email|unique:usuarios,email',  // Validar que el email sea único
            'contraseña' => 'required|string|min:8|confirmed',  // Contraseña debe ser confirmada
        ]);

        // Crear el usuario
        $user = Usuario::create([
            'nombre' => $validatedData['nombre'],
            'usuario' => $validatedData['usuario'],
            'email' => $validatedData['email'],
            'contraseña' => $validatedData['contraseña'], // El modelo se encarga del hash
            'rol' => 'usuario',  // Asigna un rol por defecto si es necesario
        ]);

        // Autenticar al usuario después de la creación
        Auth::login($user);

        // Redirigir al usuario a la página deseada después del registro
        return redirect()->route('index');  // Puedes cambiar esto a cualquier ruta donde quieras redirigir al usuario
    }
}
