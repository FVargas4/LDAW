<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegrantesControllers;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TituloController;
use App\Http\Controllers\JuegoFisicoController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\OfertaJuegoController;


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

Route::get("/", function(){

    return view("vghome");
});

//Route::get("/test", [TituloController::class, 'index']);

// use App\Http\Controllers\TituloController;


Route::resource('titulo', TituloController::class);

Route::resource('usuarios', UsuarioController::class);
Route::resource('juegofisico',JuegoFisicoController::class);
Route::resource('ofertas',OfertaController::class);
Route::resource('ofertaJuego',OfertaJuegoController::class);



Route::delete('/titulo/{id}', 'App\Http\Controllers\TituloController@destroy');

//Route::post('/titulo/create', 'App\Http\Controllers\TituloController@create');

//Route::post('/titulo/update', 'App\Http\Controllers\TituloController@update');

