<?php

namespace Database\Factories;

use App\Models\Ciudad;
use App\Models\Pais;
use Illuminate\Database\Eloquent\Factories\Factory;

class CiudadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ciudad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre_ciudad' => $this->faker->city(),
            'pais_id' => Pais::all()->random()->id,
        ];
    }
}
