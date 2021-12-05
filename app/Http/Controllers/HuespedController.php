<?php

namespace App\Http\Controllers;

use App\Models\Huespedes;
use Illuminate\Http\Request;

class HuespedController extends Controller
{
    public function index()
    {
        $huesped=Huespedes::orderBy('id','desc')->paginate();
       return view('Huesped.index', compact('huesped'));
       
       
    }

    public function create()
    {
        return view('Huesped.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required', 
            'Apellido' => 'required',
            'Telefono' => 'required',
            'correo' => 'required',
            'tipo_documento_id' => 'required|max:10',
            'Numero_documento' => 'required',
            'Domicilio' => 'required',
            'motivo_viaje_id' => 'required',
            'origen_id' => 'required',
            'destino_id' => 'required',
            'sexo_id' => 'required',
           
            
        ]);

        $huesped = new Huespedes();
        $huesped->Nombre = $request->Nombre;
        $huesped->Apellido = $request->Apellido;
        $huesped->Telefono = $request->Telefono;
        $huesped->correo = $request->correo;
        $huesped->tipo_documento_id = $request->tipo_documento_id;
        $huesped->Numero_documento = $request->Numero_documento ;
        $huesped->Domicilio = $request->Domicilio;
        $huesped->motivo_viaje_id = $request->motivo_viaje_id;
        $huesped->origen_id = $request->origen_id;
        $huesped->destino_id = $request->destino_id;
        $huesped->sexo_id = $request->sexo_id;
        $huesped->save();

        return redirect()->route('huesped.show',$huesped);
    }

    public function show(Huespedes $huesped)
    {
        return view('huesped.show',compact('huesped'));
    }

    public function edit(Huespedes $huesped){

        return view('huesped.edit', compact('huesped'));
    }

    public function update(Request $request, Huespedes $huesped)
    {

        $request->validate([
            'Nombre' => 'required', 
            'Apellido' => 'required',
            'Telefono' => 'required',
            'correo' => 'required',
            'tipo_documento_id' => 'required|max:10',
            'Numero_documento' => 'required',
            'Domicilio' => 'required',
            'motivo_viaje_id' => 'required',
            'origen_id' => 'required',
            'destino_id' => 'required',
            'sexo_id' => 'required',
            

        ]);


        $huesped->Nombre = $request->Nombre;
        $huesped->Apellido = $request->Apellido;
        $huesped->Telefono = $request->Telefono;
        $huesped->correo = $request->correo;
        $huesped->tipo_documento_id = $request->tipo_documento_id;
        $huesped->Numero_documento = $request->Numero_documento ;
        $huesped->Domicilio = $request->Domicilio;
        $huesped->motivo_viaje_id = $request->motivo_viaje_id;
        $huesped->origen_id = $request->origen_id;
        $huesped->destino_id = $request->destino_id;
        $huesped->sexo_id = $request->sexo_id;
        
        $huesped->save();
        return redirect()->route('huesped.show',$huesped);
    }
}
