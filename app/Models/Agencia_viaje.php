<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia_viaje extends Model
{
    protected $table = "agencias_viajes";
    use HasFactory;
    public function Agencias_viajes(){
        return $this->morphToMany('App\Models\Hospedaje','allservicio');
        
    }
}
