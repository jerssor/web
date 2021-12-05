<?php

namespace Database\Factories;

use App\Models\Agencia_viaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class Agencia_viajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agencia_viaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name()
        ];
    }
}
