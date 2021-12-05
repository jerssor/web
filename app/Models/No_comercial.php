<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class No_comercial extends Model
{
    protected $table = "no_comerciales";
    use HasFactory;
    public function No_comerciales(){
        return $this->morphToMany('App\Models\Hospedaje','allservicio');
        
    }
}
