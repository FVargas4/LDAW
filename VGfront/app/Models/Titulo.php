<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

//class Titulo extends Model
//{
class Titulo{

    public static function getTitulo(){

        $response = Http::get(env('API_URL').'titulo');

        return $response -> json();
    }

    public static function findtitulo_id($id){

        $response = Http::get(env('API_URL').'titulo/'.$id);

        return $response -> json();
    }


    public static function getTitulobyid($id){

        $response = Http::delete(env('API_URL').'titulo/'.$id);


        //el 200 es un codigo de respuesta satisfactorio de http
        if($response->status()==200){

            return(true);
        }
        return "adsdf";

    }


    public static function createTitulo(){

        $response = Http::post(env('API_URL').'titulo',[
            'nombre' => request('nombre'),
            'condicion' => request('condicion'),
            'consola' => request('consola'),
        ]);

        if($response->status()==200){

            return(true);
        }
        return "adsdf";

    }
    

}
