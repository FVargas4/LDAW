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

    public static function getResenas_2(){

        $response = Http::get(env('API_URL').'resenas_3');

      
        return $response -> json();
    }


    public static function getResenasid($id){

        $response = Http::delete(env('API_URL').'resenas/'.$id);


        //el 200 es un codigo de respuesta satisfactorio de http
        if($response->status()==200){

            return(true);
        }
        return "adsdf";

    }




    use HasFactory;


    
}
