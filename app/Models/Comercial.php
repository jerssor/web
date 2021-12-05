<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercial extends Model
{
    protected $table = "comerciales";
    use HasFactory;
    public function Comerciales(){
        return $this->morphToMany('App\Models\Hospedaje','allservicio');
        
    }
}
