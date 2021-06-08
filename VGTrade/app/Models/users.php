<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class users extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $fillable = [
        'name',
        'email',
        'password',
        'telefono',
    ];

    public $timestamps = false;
    public $table ="users";

    public static function getAllUsuarios(){
        $usuarios = self::all();
        return $usuarios;
    }

    // public static function getAllUsuarios($mail){
    //     $usuarios = self::select('*')->where('email', '=', $mail)->first();
    //     return $usuarios;
    // }
    public function rol(){
        return $this->belongsTo(rol::class);
    }

    public function getPrivilegesList(){

         //var_dump($this->rol->privilegios);
         //die;
        
        $privileges = $this->rol->privilegios;

        if($privileges){
            return $privileges->pluck("nombre");
        }

        return [];

    }
}
