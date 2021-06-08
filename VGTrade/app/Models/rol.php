<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;

    /*******************
        CONFIGURACIÓN
    ********************/

    //Desactivar los timestamps
    public $timestamps = false;

    protected $table = 'rol';

    /******************
        ASOCIACIONES
    *******************/

    //Un rol puede tener muchos usuarios
    public function users(){
        return $this->hasMany(users::class);
    }

    //Un rol puede tener muchos privilegios N a N
    public function privilegios(){
        return $this->belongsToMany(privilegio::class,"rol_privilegio", 'rol_id', 'privilegio_id');
    }
}



