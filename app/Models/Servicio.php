<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";
    use HasFactory;
    public function Habitacion(){
        return $this->belongsToMany('App\Models\Habitacion');

    } 
}
