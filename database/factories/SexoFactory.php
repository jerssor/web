<?php

namespace Database\Factories;

use App\Models\Sexo;
use Illuminate\Database\Eloquent\Factories\Factory;

class SexoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sexo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Genero'=> $this->faker->unique()->randomElement(['Femenino','Masculino'])
        ];
    }
}
