<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = "habitaciones";
    use HasFactory;
    public function Hospedaje(){
        return $this->belongsToMany(Hospedaje::class);

    } 


    public function Servicio(){
        return $this->belongsToMany(Servicio::class);

    } 

}
