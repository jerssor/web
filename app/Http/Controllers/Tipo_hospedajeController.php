<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Models\Hospedaje;
use App\Models\Tipo_hospedaje;
use App\Models\Allservicio;


use Illuminate\Http\Request;

class Tipo_hospedajeController extends Controller
{
    public function index()
    {
       $tipo_hospedaje = Tipo_hospedaje::all();
      
       return view('Tipo_hospedaje.index', compact('tipo_hospedaje'));
    }

    public function create()
    {
        $tipos_hospedajes = Tipo_hospedaje::all();
        return$tipos_hospedajes;
        return view('Tipo_hospedaje.create');
    }

    public function show($id)
    {
        $tipo_hospedaje = Tipo_hospedaje::find($id);
        $hospedaje = Hospedaje::where('Tipo_hospedaje_id', $tipo_hospedaje->id)
                              ->where('status',2)
                              ->orderBy('id','desc')
                              ->latest('id')
                              ->paginate();
                              



        // return $tipo_hospedaje; 
        return view('Tipo_hospedaje.show', compact('tipo_hospedaje', 'hospedaje'));
       
    }
}
