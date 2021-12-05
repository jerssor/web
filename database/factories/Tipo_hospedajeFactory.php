<?php

namespace Database\Factories;

use App\Models\Tipo_hospedaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class Tipo_hospedajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tipo_hospedaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Tipo_hospedaje'=> $this->faker->name(['Hotel','Residencia','Hostal','Hostel']),
            'Descripcion'=> $this->faker->text(),
        ];
    }
}
