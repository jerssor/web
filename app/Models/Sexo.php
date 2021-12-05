<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;
    protected $table = "sexos";

    public function huesped(){
        return $this->hasMany('App\Models\Huespedes');
        
    }
}
