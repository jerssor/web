<?php

namespace Database\Factories;



use App\Models\Agencia_viaje;
use App\Models\Allservicio;
use App\Models\Comercial;
use App\Models\Gastronomia;
use App\Models\Guia_turistico;
use App\Models\Historico;
use App\Models\Hospedaje;
use App\Models\No_comercial;
use App\Models\Parque;
use App\Models\Transporte;

use Illuminate\Database\Eloquent\Factories\Factory;

class AllservicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Allservicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [

       
            'allservicio_id' => $this->faker->randomElement([
               
                Gastronomia::all()->random()->id,
                Historico::all()->random()->id,
                Comercial::all()->random()->id,
                No_comercial::all()->random()->id,
                Transporte::all()->random()->id,
                Agencia_viaje::all()->random()->id,
                Guia_turistico::all()->random()->id,
            ]),
            'allservicio_type' => $this->faker->randomElement([
                Parque::class,
                Gastronomia::class,
                Historico::class,
                Comercial::class,
                No_comercial::class,
                Transporte::class,
                Agencia_viaje::class,
                Guia_turistico::class
            ]),
            'hospedaje_id' => Hospedaje::all()->random()->id,
            
        ];
    }
}
