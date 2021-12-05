<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Hospedaje extends Model
{
    protected $table = "hospedajes";
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tipo_hospedaje(){
        return $this->belongsTo('App\Models\Tipo_hospedaje');

    }

    //Relacion de muchos a muchos

    public function habitacion(){
        return $this->belongsToMany('App\Models\Habitacion');

    } 

    public function pregutas_frecuentes(){
        return $this->belongsToMany('App\Models\Pregunta_frecuente');
    }

    //muchos a muchos polimorfica

    public function parques(){
        return $this->morphedByMany('App\Models\Parque', 'allservicio');
    }

    public function gastronomias(){

        return $this->morphedByMany('App\Models\Gastronomia', 'allservicio');
    }

    public function historicos(){

        return $this->morphedByMany('App\Models\Historico', 'allservicio');
    }

    public function comerciales(){

        return $this->morphedByMany('App\Models\Comercial', 'allservicio');
    }

    public function no_comerciales(){

        return $this->morphedByMany('App\Models\No_comercial', 'allservicio');
    }

    public function transportes(){

        return $this->morphedByMany('App\Models\Transporte', 'allservicio');
    }

    public function agencias_viajes(){

        return $this->morphedByMany('App\Models\Agencia_viaje', 'allservicio');
    }
    public function guias_turisticos(){

        return $this->morphedByMany('App\Models\Guia_turistico', 'allservicio');
    }

    public function image(){

        return $this->morphOne(Image::class, 'imageable');
    }
}
