<?php

namespace Database\Factories;

use App\Models\Detalle_factura;
use App\Models\Factura;
use App\Models\Precio;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detalle_facturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detalle_factura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'factura_id' => Factura::all()->random()->id,
            'id_servicio' => Servicio::all()->random()->id,
            'id_precio' => Precio::all()->random()->id,
            'Cantidad' => $this->faker->randomElement([2, 3,4,5]),
            'Precio_ventas'  => $this->faker->randomElement([2000, 3000,4000,5000]),
            'Total_precio' => $this->faker->randomElement([2000, 3000,4000,5000]),
            'Total_IVA' => $this->faker->randomElement([2000, 3000,4000,5000]),
            'Total_descuento' => $this->faker->randomElement([2000, 3000,4000,5000]),
        ];
    }
}
