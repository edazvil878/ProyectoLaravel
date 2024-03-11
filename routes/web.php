<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\registroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/usuario', UsuarioController::class);
//Quiero que al poner esta ruta me ejecute mostrar() del controlador registro 
Route::get('/registro', [registroController::class, 'mostrar'])
    ->name("registro.mostrar");
Route::post('/postRegistro', [registroController::class, 'validar'])
    ->name("registro.validar");
Route::get('/login', [loginController::class, 'mostrar'])
    ->name("login.mostrar");
Route::post('/postLogin', [loginController::class, 'validar'])
    ->name("login.validar");
Route::resource('/curso', CursoController::class);
