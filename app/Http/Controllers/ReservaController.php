<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
       return view('Reserva.index');
    }

    public function create()
    {
        return view('Reserva.create');
    }

    public function show($Reserva)
    {
        return view('Reserva.show',compact('Reserva'));
    }
}
