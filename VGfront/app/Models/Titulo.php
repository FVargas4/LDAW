<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

//class Titulo extends Model
//{
class Titulo{
    public static function getTitulo(){
        $response = Http::get(env('API_URL').'/titulo');
        return $response -> json();
    }
}
