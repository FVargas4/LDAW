<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuegoFisico extends Model
{
    use HasFactory;
    protected $fillable =[
        'titulo', 'condicion', 'consola'
    ];
    // public $timestamps = false;
    // public $table ="juego_fisicos";
    // public static function getAlljuegosfisicos(){
    //     $juegosfisicos = self::all();
    //     return $juegosfisicos;
    // }
}
