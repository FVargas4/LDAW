<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Titulo extends Model
{


    protected $fillable =[

        'nombre', 'condicion', 'consola','aprobado'
    ];


    public $timestamps = false;
    public $table ="titulos";

    public static function getAllTitulos(){
        $titulos = self::all();
        return $titulos;
    }

    public static function getConfirmacion(){
        $resenas = DB::table('titulos')
                        ->select('titulos.id','titulos.nombre','titulos.condicion','titulos.consola','titulos.aprobado')
                        //->where('aprobado','=','0')
                        ->get();
        return $resenas;
    }

    use HasFactory;

    public function juegofisico()
    {
        return $this->hasMany(JuegoFisico::class);
    }
}
