<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Huespedes extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre','Apellido','Telefono','correo','tipo_documento_id','Numero_documento','Domicilio','motivo_viaje_id','origen_id','destino_id','sexo_id'];

    // public function getRouteKeyName()
    // {
    //     return "slug";
    // }

    public function Motivo_viaje(){
        return $this->belongsTo('App\Models\Motivo_viaje');

    }

    public function Sexo(){
        return $this->belongsTo('App\Models\Sexo');

    }

    public function Tipo_documento(){
        return $this->belongsTo('App\Models\Tipo_documento');

    }


    public function Ciudades(){
        return $this->belongsTo('App\Models\Ciudad');

    }

    public function Origen(){
        return $this->belongsTo('App\Models\Origen');

    }

    public function Destino(){
        return $this->belongsTo('App\Models\Destino');

    }

    public function Factura(){
        return $this->hasMany('App\Models\Factura'); 
    }
}
