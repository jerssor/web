<?php

namespace Database\Factories;

use App\Models\Guia_turistico;
use Illuminate\Database\Eloquent\Factories\Factory;

class Guia_turisticoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guia_turistico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name(),
            'Precio' => $this->faker->randomElement([1000,2000,3000,4000])
        ];
    }
}
