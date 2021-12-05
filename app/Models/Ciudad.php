<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = "ciudades";


    public function Pais(){
        return $this->belongsTo('App\Models\Pais');

    }


    public function Huesped(){
        return $this->hasMany('App\Models\Huespedes');

    }

    public function Origen(){
        return $this->hasMany('App\Models\Origen');
        
    }

    public function Destino(){
        return $this->hasMany('App\Models\Destino');
        
    }
}
