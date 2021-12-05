<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_hospedaje extends Model
{
    protected $table = "tipos_hospedajes";
    use HasFactory;

    protected $fillable = ['Tipo_hospedaje', 'Slug', 'Descripcion'];
   

    public function Hospedaje(){
        return $this->hasMany('App\Models\Hospedaje');
        
    }

    public function image(){

        return $this->morphOne(Image::class, 'imageable');
    }
}
