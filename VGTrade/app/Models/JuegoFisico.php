<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuegoFisico extends Model
{
    public $timestamps = false;
    public $table ="juegosfisicos";
    public static function getAlljuegosfisicos(){
        $juegosfisicos = self::all();
        return $juegosfisicos;
    }
    use HasFactory;
}
