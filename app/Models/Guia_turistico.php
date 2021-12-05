<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guia_turistico extends Model
{
    protected $table = "guias_turisticos";
    use HasFactory;
    public function Guias_turisticos(){
        return $this->morphToMany('App\Models\Hospedaje','allservicio');
        
    }
}
