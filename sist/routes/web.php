<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
