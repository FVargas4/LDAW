<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'id_juego_propuesto','id_juego_ofertado', 'estado',
    ];
    
    public function juegofisico()
    {
        return $this->hasMany(JuegoFisico::class);
    }
}
