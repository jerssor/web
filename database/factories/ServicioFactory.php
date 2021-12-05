<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Servicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Servicio' => $this->faker->name(),
            'Descripcion' => $this->faker->text(50),
            'Precio'=> $this->faker->randomElement([123456, 9876543]),
        ];
    }
}
