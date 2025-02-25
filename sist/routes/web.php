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

Route::get('/verificar-rol', [AuthController::class, 'verificarRol'])->name('usuario.verificarRol');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::post('/registrar', [UsuarioController::class, 'agregarUsuario'])->name('usuario.registrar');