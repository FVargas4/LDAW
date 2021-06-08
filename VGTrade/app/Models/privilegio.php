<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class privilegio extends Model
{
    use HasFactory;
    /*******************
        CONFIGURACIÓN
    ********************/

    //Desactivar los timestamps
    public $timestamps = false;

    /******************
        ASOCIACIONES
    *******************/

    //Un privilegio puede estar asociado a muchos roles N a N
    public function roles(){
        return $this->belongsToMany(rol::class,"rol_privilegio");
    }

    

}
