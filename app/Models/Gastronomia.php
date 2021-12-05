<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastronomia extends Model
{
    use HasFactory;
    public function Gastronomias(){
        return $this->morphToMany('App\Models\Hospedaje','allservicio');
        
    }
}
