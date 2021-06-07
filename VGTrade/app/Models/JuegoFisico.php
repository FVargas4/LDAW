<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuegoFisico extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id','titulo_id', 'condicion1', 'consola1', 'enOferta',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function titulo()
    {
        return $this->belongsTo(Titulo::class);
    }

    public function oferta()
    {
        return $this->belongsTo(Oferta::class);
    }

}
