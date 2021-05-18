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


    public static function getTitulobyid($id){

        $response = Http::delete(env('API_URL').'titulo/'.$id);


        //el 200 es un codigo de respuesta satisfactorio de http
        if($response->status()==200){


            return(true);
        }
        return "adsdf";

    }

}
