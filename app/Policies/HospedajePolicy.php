<?php

namespace App\Policies;

use App\Models\Hospedaje;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Prophecy\Promise\ReturnPromise;

class HospedajePolicy
{
    use HandlesAuthorization;

    public function author(User $user, Hospedaje $hospedaje){
        if($user->id == $hospedaje->user_id){
            return true;
        }else{
             return false;
        }

    }

    public function published(?User $user, Hospedaje $hospedaje){
        if($hospedaje->status == 2){
          return true;  
        }else{
          return false;  
        }
    }
    
}
