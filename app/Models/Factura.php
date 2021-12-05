<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table = "facturas";

    public function huesped(){
        return $this->belongsTo('App\Models\Huespedes');
    }

    public function detalle_facturas(){
        return $this->hasMany('App\Models\Detalle_factura');
    }
}
