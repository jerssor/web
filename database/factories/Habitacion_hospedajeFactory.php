<?php

namespace Database\Factories;

use App\Models\Habitacion_hospedaje;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hospedaje;
use App\Models\Habitacion;

class Habitacion_hospedajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habitacion_hospedaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'habitacion_id' => Habitacion::all()->random()->id,
            'hospedaje_id' => Hospedaje::all()->random()->id,
        ];
    }
}
