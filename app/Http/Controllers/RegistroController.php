<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Http\Requests\StoreRegistro;

class RegistroController extends Controller
{
    public function index(){

        $registro=Registro::paginate();
     
        return view('Registro.index',compact('registro')); 

    }
    public function create(){
        return view('Registro.create'); 
    }
    public function store(StoreRegistro $request){

        $registro = Registro::create($request->all());

        return redirect()->route('registro.show',$registro->id
    );

    }
    public function show(Registro $registro){

       
        return view('registro.show',['A' => $registro]); 
    }

    public function edit(Registro $registro){

        return view('registro.edit', compact('registro'));

    }

    public function update (StoreRegistro $request, Registro $registro){
       

        $registro->update($request->all());
        return redirect()->route('registro.show',$registro->id);

    }

    public function destroy(Registro $registro){

        $registro->delete();
        return redirect()->route('registro.index');
    }

}
 