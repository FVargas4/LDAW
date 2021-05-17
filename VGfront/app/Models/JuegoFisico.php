<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuegoFisico extends Model
{
    use HasFactory;
    public static function getJuegoFisico(){
        $response = Http::get(env('API_URL').'juegofisico');

        return $response -> json();
    }
}
