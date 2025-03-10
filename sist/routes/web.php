<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login2');
})->name("login2");

Route::get('/index', function () {
    return view('index');
})->name("index");

Route::get('/preguntas', function () {
    return view('preguntas');
})->name("preguntas");

Route::get('/actividad', function () {
    return view('actividad');
})->name("actividad");

Route::get('/actividad2', function () {
    return view('actividad2');
})->name("actividad2");

Route::get('/unid', function () {
    return view('unid');
})->name("unid");

Route::get('/registro', function(){
    return view('registro');
})->name("registro");

Route::get('/olvido', function(){
    return view('olvido');
})->name("olvido");

Route::get('/admin', function(){
    return view('admin');
})->name("admin");

Route::get('/creditos', function(){
    return view('creditos');
})->name("creditos");



//  método index del UsuarioController
Route::get('/usuarios_m', [UsuarioController::class, 'index'])->name("usuarios_m");
//login
Route::get('/verificar-rol', [AuthController::class, 'verificarRol'])->name('usuario.verificarRol');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
//7registrarse
Route::post('/registrar', [UsuarioController::class, 'agregarUsuario'])->name('usuario.registrar');
// tablas usuraios
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/api/usuarios', [UsuarioController::class, 'getUsuarios'])->name('api.usuarios');
//actualizar usuario
Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');
//eliminar usuario
