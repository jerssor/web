<?php

namespace Database\Factories;

use App\Models\Habitacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habitacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Tipo_habitacion' => $this->faker->name(),
            'Cantidad' => $this->faker->randomElement([1,2,3,4,5]),
            'Descripcion' => $this->faker->text(50),
            'Precio' => $this->faker->randomNumber(),
        ];
    }
}
