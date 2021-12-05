<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parque extends Model
{
    protected $table = "parques";
    use HasFactory;
    public function Parques(){
        return $this->morphToMany('App\Models\Hospedaje','allservicio');
        
    }
}
