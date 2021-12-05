<?php

namespace Database\Factories;

use App\Models\Factura;
use App\Models\Huespedes;
use App\Models\Metodo_pago;
use Illuminate\Database\Eloquent\Factories\Factory;
use Mockery\Generator\Method;

class FacturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Fecha_factura' => $this->faker->dateTime($max='now'),
            'Metodo_pago' => Metodo_pago::all()->random()->id,
            'Total_factura' => $this->faker->randomElement([123456, 9876543]),
            'Total_IVA' => $this->faker->randomElement([123456, 9876543]),
            'Total_descuentos' => $this->faker->randomElement([123456, 9876543]),
            'huespedes_id' => Huespedes::all()->random()->id
        ];
    }
}
