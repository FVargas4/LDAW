<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoFisicoController;
use App\Http\Controllers\TituloController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\OfertaJuegoController;
use App\Http\Controllers\OfertaUsuarioController;
use App\Http\Controllers\JuegoFisicoTituloController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::apiResource('JuegoFisico',JuegoFisicoController::class);
Route::apiResource('Oferta',OfertaController::class);
Route::apiResource('OfertaJuego',OfertaJuegoController::class);
Route::apiResource('OfertaUsuario',OfertaUsuarioController::class);
Route::apiResource('Juegos',JuegoFisicoTituloController::class);


// Route::get('/JuegoFisico', [JuegoFisicoController::class, 'index']);
// Route::get('/JuegoFisico/{juegofisico}', [JuegoFisicoController::class, 'show']);
// Route::post('/JuegoFisico', [JuegoFisicoController::class, 'store']);
// Route::put('/JuegoFisico/{juegofisico}', [JuegoFisicoController::class, 'update']);
// Route::delete('/JuegoFisico/{juegofisico}', [JuegoFisicoController::class, 'destroy']);


Route::apiResource('titulo',TituloController::class);




