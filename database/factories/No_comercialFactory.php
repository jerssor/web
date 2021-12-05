<?php

namespace Database\Factories;

use App\Models\No_comercial;
use Illuminate\Database\Eloquent\Factories\Factory;

class No_comercialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = No_comercial::class;

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
