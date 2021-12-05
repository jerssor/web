<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HospedajeHabitaciones extends Component
{
    public $habitacion;
    public $hospedaje =[];

    // public $habitaciones

    public function loadPosts(){
        $this->hospedaje=$this->habitacion;
        
        $this->emit('glider');
    }
    
    public function render()
    {
        return view('livewire.hospedaje-habitaciones');
    }
}
