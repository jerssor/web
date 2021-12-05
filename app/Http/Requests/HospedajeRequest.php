<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospedajeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user_id == auth()->user()->id){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $hospedaje = $this->route()->parameter('hospedaje');
        $rules = [
            
            'Nombre' => 'required',
            'slug' => 'required|unique:hospedajes',
            'status' => 'required|in:1,2'
            
        ];

        if($hospedaje){
            $rules['slug'] = 'required|unique:hospedajes,slug,' . $hospedaje->id;
        }
        if($this->status == 2){
            $rules = array_merge($rules,[
                'NIT' => 'required',
                'user_id' => 'required',
                'Telefono' => 'required',
                'Correo' => 'required',
                'Direccion' => 'required',
                'logo' => 'required',
                'Descripcion' => 'required',
                'tipo_hospedaje_id'=> 'required',
                'Tipo_habitacion'=>'required'
            ]); 
        }
        return $rules;
    }
    
}
