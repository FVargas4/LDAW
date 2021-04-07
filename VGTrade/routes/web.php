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

Route::get("/test", function(){

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

Route::get("/pi", function(){

    $integrantes = [
        "1" => [
            "nombre" => "Fernando Vargas Álvarez",
            "matricula" => "A01066270",
            "foto" => "FerVargas",
            "texto" => "En el semestre utilice bitbucket para el control de versiones y la verdad, al ser nuevo en esa 
            plataforma, no tuve ningún problema adaptándome a él. Así mismo utilice Visual Studio Code para mantener mi 
            versión local del proyecto actualizada (pull) y, en algunos casos, actualizar el repositorio virtual del 
            mismo (push).  No he usado ningún  framework para desarrollo web y utilicé Bootstrap 
            como framework de CSS, pero estoy dispuesto a cambiar eso pues serán herramientas muy importantes para el 
            futuro."
        ],
        "2" => [
            "nombre" => "Carlos Ayala Medina",
            "matricula" => "A01703682",
            "foto" => "CarlosAyala",
            "texto" => "Mi experiencia en el desarrollo web es con proyectos donde se utilizó HTML, CSS, JavaScript,
             algunas librerías de frontend como Materialize y bootstrap."
        ],
        "3" => [
            "nombre" => "Victor Omar Molina",
            "matricula" => "A01423485",
            "foto" => "OmarMolina",
            "texto" => "Mi experiencia en diseño web es en base a lo que vi en bloque 1 que fue php, html, en utilice 
            frameworks de css como bootstrap y materialize, de igual forma ajax y java script"
        ]
    ];

    return view("test", ["integrantes" => $integrantes]);
});

Route::get("/home", function(){

    return view("vghome");
});