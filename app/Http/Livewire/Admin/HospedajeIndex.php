<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Hospedaje;
use Livewire\WithPagination;
class HospedajeIndex extends Component
{
    use  WithPagination;
    protected $paginationTheme ="bootstrap";
    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $hospedajes =Hospedaje::where('user_id', auth()->user()->id)
        ->where('Nombre','LIKE','%' . $this->search . '%')
        ->latest('id')
        ->paginate();
        return view('livewire.admin.hospedaje-index', compact('hospedajes'));
    }
}
