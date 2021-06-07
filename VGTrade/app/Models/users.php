<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    
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

    use HasFactory;
}
