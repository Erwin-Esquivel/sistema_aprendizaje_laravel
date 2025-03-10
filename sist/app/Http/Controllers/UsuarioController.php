<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

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
            'rol' => 'user',  // Asigna un rol por defecto si es necesario
        ]);

        // Autenticar al usuario después de la creación
        Auth::login($user);

        // Redirigir al usuario a la página deseada después del registro
        return redirect()->route('index');  // Puedes cambiar esto a cualquier ruta donde quieras redirigir al usuario
    }


    public function index()
    {
        // Obtener todos los usuarios de la base de datos
        $usuarios = Usuario::all();

        // Retornar la vista con los datos
        return view('usuarios_m', compact('usuarios'));
    }

        public function getUsuarios()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }   
    //edit
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    // Actualizar la información del usuario
    public function update(Request $request, $id)
            {
                $request->validate([
                    'usuario' => 'required|string|max:255',
                    'nombre' => 'required|string|max:255',
                    'contraseña' => 'nullable|string|min:8|confirmed',
                    'email' => 'required|string|email|max:255',
                    'rol' => 'required|string|max:255',
                ]);

                $usuario = Usuario::findOrFail($id);
                $usuario->usuario = $request->input('usuario');
                $usuario->nombre = $request->input('nombre');
                if ($request->filled('contraseña')) {
                    $usuario->contraseña = $request->input('contraseña'); // No hashear aquí
                }
                $usuario->email = $request->input('email');
                $usuario->rol = $request->input('rol');
                $usuario->save();

                return redirect()->route('usuarios_m', $usuario->id)->with('success', 'Usuario actualizado correctamente');
            }
    
    
}
