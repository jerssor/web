<?php

namespace Database\Factories;

use App\Models\Ciudad;
use App\Models\Habitacion;
use App\Models\Hospedaje;
use App\Models\Huespedes;
use App\Models\Pais;
use App\Models\Reserva;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reserva::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'huesped_id'  => Huespedes::all()->random()->id,
            'hospedaje_id' => Hospedaje::all()->random()->id,
            'Id_habitacion' => Habitacion::all()->random()->id,
            'Id_pais' => Pais::all()->random()->id,
            'Id_ciudad' => Ciudad::all()->random()->id,
            'Id_servicio' => $this->faker->randomElement([1,2,3,4,5]),
            'Check-in' =>  $this->faker->date(),
            'Check-out' =>  $this->faker->date()
        ];
    }
}
