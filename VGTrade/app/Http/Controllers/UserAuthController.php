<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Se importa el modelo de usuario para usar sus métodos en la autenticación
use App\Models\users;

//Importar la clase HASH para manejar el hasheo de contraseñas
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller{

    //Login con sanctum
    function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
        
        $user = users::where('email', $request->email)->first();
        // var_dump($user);
        // die;
        if (! $user || !Hash::check($request->password, $user->password)){
           return response([
                'mensaje' => 'Correo electronico o contrasena incorrecta',
           ], 403);
        }

        return [
                "token" => $user->createToken($request->device_name)->plainTextToken
            ];
    }

    //Devuelve el usuario autenticado
    public function getUser(Request $request){

        $user = $request->user();

        return [
            "email" => $user->email,
            "name" => $user->name,
            //"rol" => $user->rol->name,
            //"privilegios" => $user->getPrivilegesList()
        ];

    }

    //Logout con sanctum
    function logout(Request $request){
        // Revoke all tokens...
        $request->user()->tokens()->delete();
    }

}