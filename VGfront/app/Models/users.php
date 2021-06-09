<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

// class User extends Authenticatable
// {
class users extends Authenticatable{

    public $token = null;
    public $email = null;
    public $name = null;
    
    public static function getUsuario(){

        //dd(Auth::user());
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

    // public static function checkEmail($mail){
    //     $response = Http::get
    // }


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

    public function revokeToken(){

        //obtener los datos del usuario desde la API
        $response = HTTP::withToken($this->token)
                        ->timeout(env("API_TIMEOUT"))
                        ->get(env("API_URL") ."logout");

        //dd($response->body());

        return $response->successful();

    }

    public static function requestUser($token){

        //obtener los datos del usuario desde la API
        $response = HTTP::withToken($token)
                        ->timeout(env("API_TIMEOUT"))
                        ->get(env("API_URL") ."user");



        //dd($response->body());

        if($response->successful()){
            //Crear la instancia del usuario y devolverla
            $userData = $response->json();

            $user = new users;
            //dd($user->rol);
            $user->email = $userData["email"];
            $user->name = $userData["name"];
            $user->rol = $userData["rol"];

            //dd($user->rol);
            $user->privileges = $userData["privilegios"];
            $user->token = $token;


            return $user;

        }

        return null;

    }

    public function getAuthIdentifierName(){
        return "token";
    }

    public function getAuthIdentifier(){
        return $this->token;
    }

    public function getAuthPassword(){
        return $this->token;
    }

    public function getRememberToken(){
        return null;
    }

    public function setRememberToken($value){

    }

    public function getRememberTokenName(){
        return null;
    }

    public function isAdmin(){
        return $this->rol === 'admin';
    }

    public function isUser(){
        return $this->rol === 'usuario';
    }

    public function hasPrivilege($privilege){
        return in_array($privilege, $this->privileges);
    }
}
