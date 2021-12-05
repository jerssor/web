<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;
    protected $table = "destinos";

    public function Ciudad(){
        return $this->belongsTo('App\Models\Ciudad');

    }

    public function huesped(){
        return $this->hasMany('App\Models\Huespedes');
        
    }
}
