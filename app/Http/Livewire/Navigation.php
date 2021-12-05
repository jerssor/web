<?php

namespace App\Http\Livewire;

use App\Models\Tipo_hospedaje;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $tipo_hospedajes = Tipo_hospedaje::all();

        return view('livewire.navigation',compact('tipo_hospedajes'));
    }
}
