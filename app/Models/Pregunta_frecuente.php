<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta_frecuente extends Model
{
    protected $table = "preguntas_frecuentes";
    use HasFactory;

    public function hospedajes(){
        return $this->belongsToMany('App\Models\Hospedaje');
    }

   
}
