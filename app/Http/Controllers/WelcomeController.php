<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;

class welcomeController extends Controller
{
    public function __invoke()
    {
        $habitaciones = Habitacion::all();
        return view('welcome', compact('habitaciones'));
    }
}
