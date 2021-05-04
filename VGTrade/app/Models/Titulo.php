<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    public $timestamps = false;
    public $table ="titulos";
    public static function getAllTitulos(){
        $titulos = self::all();
        return $titulos;
    }
    use HasFactory;
}
