<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Http;


// class User extends Authenticatable
// {
class users{
    
    public static function getUsuario(){

        $response = Http::get(env('API_URL').'users');

        //dd($response);
        return $response -> json();
    }
    public static function findUsers_id($id){

        $response = Http::get(env('API_URL').'users/'.$id);

        return $response -> json();
    }


    public static function getUserbyId($id){

        $response = Http::delete(env('API_URL').'users/'.$id);


        //el 200 es un codigo de respuesta satisfactorio de http
        if($response->status()==200){

            return(true);
        }
        return "adsdf";

    }


    public static function createUser(){

        $response = Http::post(env('API_URL').'user',[
            'name' => request('nombre'),
            'email' => request('email'),
            'telefono' => request('telefono'),
            'password' => request('password'),
        ]);

        if($response->status()==200){

            return(true);
        }
        return "adsdf";

    }
}
