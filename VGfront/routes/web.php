<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegrantesControllers;
use App\Http\Controllers\usersController;
//use App\Http\Controllers\auth\UserAuthController;
use App\Http\Controllers\JuegoFisicoController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\TituloController;
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

use App\Http\Controllers\ReseñasController;

Route::resource('resenas', ReseñasController::class);

Route::resource('usuario', usersController::class);
Route::resource('juegofisico',JuegoFisicoController::class);
Route::resource('ofertas',OfertaController::class);
Route::get("/calendario", function(){return view('calendario');});
Route::resource('ofertaJuego',OfertaJuegoController::class);



Route::delete('/titulo/{id}', 'App\Http\Controllers\TituloController@destroy');
Route::delete('/usuario/{id}', 'App\Http\Controllers\usersController@destroy');

use App\Models\users;
use Illuminate\Support\Facades\Auth;

Route::get("/logout", function(Request $request){
    if(auth()->user()->revokeToken()){
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/login');
    }
})->name("logout");

//Route::get('/login', [usersController::class, 'login']);
//Route::get('/check', [usersController::class, 'check']);

//Route::post('/titulo/create', 'App\Http\Controllers\TituloController@create');

//Route::post('/titulo/update', 'App\Http\Controllers\TituloController@update');

