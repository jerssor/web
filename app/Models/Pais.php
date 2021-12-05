<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = "Paises";

    public function ciudad(){
        return $this->hasMany('App\Models\Ciudad');
        
    }

}
