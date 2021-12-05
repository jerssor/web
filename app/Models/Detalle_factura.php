<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_factura extends Model
{
    use HasFactory;
    protected $table = "detalles_facturas";


    public function facturas(){
        return $this->belongsTo('App\Models\Facturas');
    }
}
