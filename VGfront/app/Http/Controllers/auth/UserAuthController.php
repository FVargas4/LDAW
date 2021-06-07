<?php

namespace App\Http\Controllers\auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


//clase para hashear contraseñas
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller 
{   
    
    /*
    * Funcion para manejar el login
    */
    function login(){
        return view("auth.login");
    }
    
    
    /*
    * Funcion para validar datos de inicio de sesion
    */
    function check(Request $request){
        //return $request->input();
        //validar inputs del login
        $credenciales = $request->validate([
            'email'=>'required|email',
            'password'=>'required', 
        ]);
        
        //recuperar mail y contraseña
        $usuario = Http::get(env('API_URL').'users', [
            'email' => $request->email
        ]);
        
        //Metodo manual, funciona pero necesitamos que regrese $user en la sesion
        
        //verificar si usuario existe en la base de datos
        if($usuario){
            //chequear si la contraseña es correcta
            //hay que agregar hash luego
            if(Auth::attempt(['mail' => $request->email, 'password' => $request->password])){
                $request->session()->put('sesionUsuario', $usuario->id);
                return redirect()->intended('panel');
            }else{
                return back()->with('fail','El usuario o la contraseña están incorrectos.');
            }
        }else{
            return back()->with('fail','El usuario o la contraseña están incorrectos.');
        }

        
        
    }
    
    function logout(){
        if(session()->has('sesionUsuario')){
            session()->pull('sesionUsuario');
            return redirect('login');
        }
    }

    function getRole(){
        $role = DB::table("roles_users")
        ->where($this->id ,'=','role_users.id');
        return $role;
    }
}
