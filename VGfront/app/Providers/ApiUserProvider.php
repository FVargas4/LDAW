<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use App\Models\users;

//Cliente HTTP de Laravel para solicitar datos a la API
use Illuminate\Support\Facades\Http;

class ApiUserProvider implements UserProvider
{
    public function retrieveById($identifier){
        return users::requestUser($identifier);
    }
    public function retrieveByToken($identifier, $token){
        return users::requestUser($token);
    }
    public function updateRememberToken(Authenticatable $user, $token){

    }

    public function retrieveByCredentials(array $credentials){
        return new users;
    }

    public function validateCredentials(Authenticatable $user, array $credentials){
        $response = HTTP::timeout(env("API_TIMEOUT"))
                        ->post(env("API_URL") ."login", [
                            "email" => $credentials["email"],
                            "password" => $credentials["password"],
                            "device_name" => "frontend"
                        ]);

        dd($response->body());

        if($response->successful()){

            $data = $response->json();

            dd($data);
            if(isset($data["token"])){

                $user->token = $data["token"];

                //Recuperar los datos del usuario usando el token
                $userData = users::requestUser($data["token"]);

                //Si el usuario existe
                if(!empty($userData)){
                    return true;
                }

            }

        }

        return false;



    }
}