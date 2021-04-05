<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/pi", function(){

    $integrantes = [
        "1" => [
            "nombre" => "Fernando Vargas Álvarez",
            "matricula" => "A01066270",
            "foto" => "FerVargas"
        ],
        "2" => [
            "nombre" => "Carlos Ayala Medina",
            "matricula" => "A01703682",
            "foto" => "CarlosAyala"
        ],
        "3" => [
            "nombre" => "Victor Omar Molina",
            "matricula" => "A01423485",
            "foto" => "OmarMolina"
        ]
    ];

    return view("pagina-inicial", ["integrantes" => $integrantes]);
});
