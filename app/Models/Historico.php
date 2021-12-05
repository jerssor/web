<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
   
    protected $table = "historicos";
    use HasFactory;
    public function Historicos(){
        return $this->morphToMany('App\Models\Hospedaje','allservicio');
        
    }
}
