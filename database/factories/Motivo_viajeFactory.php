<?php

namespace Database\Factories;

use App\Models\Motivo_viaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class Motivo_viajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Motivo_viaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Motivo_viaje'=> $this->faker->unique()->randomElement(['Salud', 'turismo', 'trabajo'])
        ];
    }
}
