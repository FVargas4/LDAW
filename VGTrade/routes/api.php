<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

use App\Http\Controllers\TituloController;



Route::post('/titulo/{id}', ['as' => 'delete', 'uses' => 'App\Http\TituloController@destroy']);

Route::post('/titulo', [TituloController::class, 'store']);

Route::put('/titulo/{id}', [TituloController::class, 'update']);

Route::get('/JuegoFisico/{id}', [TituloController::class, 'show']);

Route::get('/titulo/{id}', [TituloController::class, 'show']);

Route::apiResource('titulo',TituloController::class);
//Route::put('/titulo/update', ['as' => 'put', 'uses' => 'App\Http\TituloController@update']);

