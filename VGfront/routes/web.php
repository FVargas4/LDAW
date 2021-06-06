<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegrantesControllers;
use App\Http\Controllers\UsuarioController;
//use App\Http\Controllers\TituloController;
use App\Http\Controllers\JuegoFisicoController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get("/pi", [IntegrantesControllers::class, 'getText']);

Route::get("/vghome", function(){

    return view("vghome");
});

//Route::get("/test", [TituloController::class, 'index']);

use App\Http\Controllers\TituloController;


Route::resource('titulo', TituloController::class);

use App\Http\Controllers\ReseñasController;

Route::resource('resenas', ReseñasController::class);

Route::resource('usuarios', UsuarioController::class);
Route::resource('juegofisico',JuegoFisicoController::class);


Route::delete('/titulo/{id}', 'App\Http\Controllers\TituloController@destroy');

//Route::post('/titulo/create', 'App\Http\Controllers\TituloController@create');

//Route::post('/titulo/update', 'App\Http\Controllers\TituloController@update');

