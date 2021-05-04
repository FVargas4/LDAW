<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titulo;

class TituloController extends Controller
{
    public function index(){
        $titulo = Titulo::getTitulo();

        return $titulo;
    }
}
