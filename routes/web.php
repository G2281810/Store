<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//-----------login-----------//
    //ruta que manda a vista login//
    Route::get('/',[LoginController::class,'login'])->name('/');

    //ruta validación de login//
    Route::post('valida',[LoginController::class,'valida'])->name('valida');
    
    //Ruta principal del sistema//
    Route::get('principal',[LoginController::class, 'principal'])->name('principal');

    //Alta nuevo usuario//
    Route::get('alta_usuarios',[UsuariosController::class,'alta_usuarios'])->name('alta_usuarios');
    Route::post('guarda_usuarios',[UsuariosController::class,'guarda_usuarios'])->name('guarda_usuarios');