<?php

namespace Database\Factories;

use App\Models\Precio;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrecioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Precio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'servicios_id'=>  Servicio::all()->random()->id,
            'Precio' => $this->faker->randomElement([123456, 9876543]),
        ];
    }
}
