<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resenas extends Model
{

    protected $fillable =[

        'calificacion', 'descripcion', 'created_at'
    ];

    public $timestamps = false;
    public $table ="resenas";
    
    public static function getAllResenas(){
        $resenas = self::all();
        return $resenas;
    }




    use HasFactory;
}
