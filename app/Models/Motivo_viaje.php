<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivo_viaje extends Model
{
    use HasFactory;
    protected $table = "motivos_viajes";

    //realcion uno a muchos
    public function huesped(){
        return $this->hasMany('App\Models\Huespedes');
        
    }



}
