<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoFisicoController;
use App\Http\Controllers\TituloController;

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


Route::apiResource('titulo',TituloController::class);
Route::apiResource('juegofisico',JuegoFisicoController::class);

Route::get('/JuegoFisico', [JuegoFisicoController::class, 'index']);
Route::post('/JuegoFisico', [JuegoFisicoController::class, 'store']);
Route::put('/JuegoFisico/{juegofisico}', [JuegoFisicoController::class, 'update']);
Route::delete('/JuegoFisico/{juegofisico}', [JuegoFisicoController::class, 'destroy']);


