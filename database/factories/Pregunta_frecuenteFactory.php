<?php

namespace Database\Factories;

use App\Models\Pregunta_frecuente;
use Illuminate\Database\Eloquent\Factories\Factory;

class Pregunta_frecuenteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pregunta_frecuente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Preguntas' => $this->faker->text(50),
            'Respuestas' => $this->faker->text(50),
        ];
    }
}
