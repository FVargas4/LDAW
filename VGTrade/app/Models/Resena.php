<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Resena extends Model
{

    protected $fillable =[

        'email','id_titulo','calificacion', 'descripcion'
    ];

    public $timestamps = false;
    public $table ="resenas";
    
    public static function getAllResenas(){
        $resenas = self::all();
        return $resenas;
    }

    public static function getName(){
        $resenas = DB::table('resenas')
                        ->select('resenas.id','users.email','users.name as autor','titulos.nombre as titulo','resenas.calificacion','resenas.descripcion', 'resenas.created_at')
                        ->leftJoin('titulos','titulos.id',"=",'resenas.id_titulo')
                        ->leftJoin('users','users.email',"=",'resenas.email')
                        ->get();
        return $resenas;
    }

    public static function getName_3(){
        $resenas = DB::table('resenas')->take(3)
                        ->select('resenas.id','users.name as autor','titulos.nombre as titulo','resenas.calificacion','resenas.descripcion', 'resenas.created_at')
                        ->leftJoin('titulos','titulos.id',"=",'resenas.id_titulo')
                        ->leftJoin('users','users.id',"=",'resenas.id_user')
                        ->get();
        return $resenas;
    }



    use HasFactory;
}
