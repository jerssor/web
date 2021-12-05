<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hospedaje;
use App\Models\Tipo_hospedaje;
use App\Models\Habitacion;
use Illuminate\Validation\Rules\Unique;
use App\Http\Requests\HospedajeRequest;
use Illuminate\Support\Facades\Storage;

class HospedajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospedajes = Hospedaje::all();
        return view('admin.hospedajes.index',compact('hospedajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_hospedajes = Tipo_hospedaje::pluck('Tipo_hospedaje','id');
        $habitaciones = Habitacion::all();
        return view('admin.hospedajes.create', compact('tipos_hospedajes', 'habitaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospedajeRequest $request)
    {
               
      $hospedaje = Hospedaje::create($request->all());

        if($request->habitaciones){
            $hospedaje->Habitacion()->attach($request->habitaciones);
        }


       if($request->file('logo'))
       {
        $url = Storage::put('hospedajes',$request->file('logo'));
         $hospedaje->image()->create([
              'url' => $url
        ]);
       }

      return redirect()->route('admin.hospedajes.edit',$hospedaje)->with('info', 'El hospedaje se creó con exito');;
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hospedaje $hospedaje)
    {
        
        
        return view('admin.hospedajes.show', compact('hospedaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospedaje $hospedaje)
    {
        $tipos_hospedajes = Tipo_hospedaje::pluck('Tipo_hospedaje','id');
        $habitaciones = Habitacion::all();
        $this->authorize('author', $hospedaje);
        $tipos_hospedajes = Tipo_hospedaje::pluck('Tipo_hospedaje','id');
        return view('admin.hospedajes.edit', compact('hospedaje', 'tipos_hospedajes','habitaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HospedajeRequest $request,Hospedaje $hospedaje)
    {
        
        $this->authorize('author', $hospedaje);
        $hospedaje->update($request->all());

        if($request->file('logo')){
           $url = Storage::put('hospedajes', $request->file('logo'));

           if($hospedaje->image){
            Storage::delete([ $hospedaje->image->url]);
            
            $hospedaje->image->update([
                'url' => $url
            ]);
           }else{
               $hospedaje->image()->create([
                   'url' => $url
               ]);
           }
        }

        return redirect()->route('admin.hospedajes.edit',$hospedaje)->with('info', 'El hospedaje se actualizó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospedaje $hospedaje)
    {
        $this->authorize('author', $hospedaje);
        $hospedaje->delete();

        return redirect()->route('admin.hospedajes.index')->with('info', 'El hospedaje se eliminó con exito');
    }
}
