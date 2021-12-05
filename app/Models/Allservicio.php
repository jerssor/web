<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allservicio extends Model
{
    use HasFactory;
    protected $table = "allservicios";

    public function allservicio(){
        return $this->morphTo();
    }
}
