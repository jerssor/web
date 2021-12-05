<?php

namespace Database\Factories;

use App\Models\Metodo_pago;
use Illuminate\Database\Eloquent\Factories\Factory;

class Metodo_pagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Metodo_pago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Metodos'=> $this->faker->randomElement(['Efectivo','Tarjeta'])
        ];
    }
}
