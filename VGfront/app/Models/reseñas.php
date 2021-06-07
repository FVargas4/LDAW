<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class reseñas extends Model
{


    public static function getResenas(){

        $response = Http::get(env('API_URL').'resenas');

        

        return $response -> json();
    }




    use HasFactory;


    
}
