<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Huespedes;
use Illuminate\Validation\Rules\Unique;

class HuespedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $huespedes=Huespedes::all();
        return view('admin.huespedes.index', compact('huespedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.huespedes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                       
            'Nombre' => 'required',
            //'slug' => 'required',
            'Apellido' => 'required',
            'Telefono' => 'required',
            'correo' => 'required',
            'tipo_documento_id' => 'required',
            'Numero_documento' => 'required|unique:huespedes',
            'Domicilio' => 'required',
            'motivo_viaje_id' => 'required',
            'origen_id' => 'required',
            'destino_id' => 'required',
            'sexo_id' => 'required',
        ]);


         $huesped = Huespedes::create($request->all());
    
        return redirect()->route('admin.huespedes.edit',$huesped)->with('info','El huesped se creó con éxito');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Huespedes $huesped)
    {
        return view('admin.huespedes.show', compact('huesped') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Huespedes $huesped)
    {
        return view('admin.huespedes.edit', compact('huesped') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Huespedes $huesped)
    {
        $request->validate([
                       
            'Nombre' => 'required',
            //'slug' => 'required',
            'Apellido' => 'required',
            'Telefono' => 'required',
            'correo' => 'required',
            'tipo_documento_id' => 'required',
            'Numero_documento' => "required|unique:huespedes,Numero_documento,$huesped->id",
            'Domicilio' => 'required',
            'motivo_viaje_id' => 'required',
            'origen_id' => 'required',
            'destino_id' => 'required',
            'sexo_id' => 'required',
        ]);

        $huesped->update($request->all());
        return redirect()->route('admin.huespedes.edit',$huesped)->with('info','El huesped se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Huespedes $huesped)
    {
        $huesped->delete();
        return redirect()->route('admin.huespedes.index')->with('info','El huesped se eliminó con éxito');;
    }
}
