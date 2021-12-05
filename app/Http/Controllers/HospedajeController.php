<?php

namespace App\Http\Controllers;

use App\Models\Hospedaje;
use App\Models\Habitacion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRegistro;
use App\Http\Requests\HospedajeRequest;
use App\Models\Tipo_hospedaje;
use Illuminate\Support\Facades\Storage;



class HospedajeController extends Controller
{

    public function index()
    {
        $hospedaje = Hospedaje::where('status', 2)->orderBy('id', 'desc')->latest('id')->paginate();
        $tipo_hospedaje = Tipo_hospedaje::get();

        return view('hospedaje.index', compact('hospedaje'));

        
    }

    public function create()
    {

        return view('Hospedaje.create');
    }

    public function show(Hospedaje $hospedaje)
    {

        $this->authorize('published', $hospedaje);
        return view('hospedaje.show', compact('hospedaje'));

        // $habitaciones = Habitacion::all();
        // return view('hospedaje.index', compact('habitaciones'));
    }

    public function store(Hospedaje $request)
    {

        $hospedaje = Hospedaje::create($request->all());

        return redirect()->route('hospedaje.show', $hospedaje);
    }

    public function edit(Hospedaje $hospedaje)
    {

        return view('hospedaje.edit', compact('hospedaje'));
    }

    public function update(HospedajeRequest $request, Hospedaje $hospedaje)
    {


        $hospedaje->update($request->all());

        if ($request->file('logo')) {
            $url = Storage::put('hospedajes', $request->file('logo'));

            if ($hospedaje->image) {
                Storage::delete([$hospedaje->image->url]);

                $hospedaje->image->update([
                    'url' => $url
                ]);
            } else {
                $hospedaje->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.hospedajes.edit', $hospedaje)->with('info', 'El hospedaje se actualizó con exito');
    }

    public function destroy(Hospedaje $hospedaje)
    {
        $hospedaje->delete();

        return redirect()->route('hospedaje.index', $hospedaje);
    }
}