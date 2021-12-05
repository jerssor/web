<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;  
use PharIo\Manifest\Email;

use function GuzzleHttp\Promise\all;

class ContactoController extends Controller
{
    public function index(){    

        return view('contacto.index');
    }

    public function store(Request $request){
        $correo = new ContactoMailable($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required | email',
            'mensaje'=>'required'
        ]);
        

    Mail::to('juliancho25@gmail.com')->send($correo);
    return redirect()->route('contacto.index')->with('info', 'Mensaje enviado');
    }
}
