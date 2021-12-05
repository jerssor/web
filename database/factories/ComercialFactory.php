<?php

namespace Database\Factories;

use App\Models\Comercial;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComercialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comercial::class;

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
