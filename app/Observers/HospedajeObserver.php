<?php

namespace App\Observers;

use App\Models\Hospedaje;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;


class HospedajeObserver
{
    
    public function creating(Hospedaje $hospedaje)
    { 
        if(! App::runningInConsole())
        {
        $hospedaje->user_id = auth()->user()->id;
        }
        
    }

    public function deleting(Hospedaje $hospedaje)
    {
        if($hospedaje->image){
            Storage::delete($hospedaje->image->url);
        }
    }

    
   
}
