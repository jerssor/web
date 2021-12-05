<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Tipo_hospedaje;

class Tipos_hospedajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_hospedaje = Tipo_hospedaje::all();
        return view('admin.tipos_hospedajes.index', compact('tipo_hospedaje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipos_hospedajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request-> validate([
        //     'Tipo_hospedaje' => 'require',
        //     'Slug' => 'required|unique:Tipos_hospedajes'
        // ]);

        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Tipo_hospedaje $tipo_hospedaje)
    {
        return view('admin.tipos_hospedajes.show', compact('tipo_hospedaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Tipo_hospedaje $tipo_hospedaje)
    {
        return view('admin.tipos_hospedajes.edit', compact('tipo_hospedaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Tipo_hospedaje $tipo_hospedaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Tipo_hospedaje $tipo_hospedaje)
    {
        //
    }
}
