<?php

namespace Database\Factories;

use App\Models\Gastronomia;
use Illuminate\Database\Eloquent\Factories\Factory;

class GastronomiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gastronomia::class;

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
