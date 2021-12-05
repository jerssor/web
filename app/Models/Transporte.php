<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    protected $table = "transportes";
    use HasFactory;
    public function Transportes(){
        return $this->morphToMany('App\Models\Hospedaje','allservicio');
        
    }
}
