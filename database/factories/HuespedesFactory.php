<?php

namespace Database\Factories;

use App\Models\Destino;
use App\Models\Factura;
use App\Models\Huespedes;
use App\Models\Motivo_viaje;
use App\Models\Origen;
use App\Models\Sexo;
use App\Models\Tipo_documento;

use Illuminate\Database\Eloquent\Factories\Factory;

class HuespedesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Huespedes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name(),
            'Apellido' => $this->faker->name(),
            'Telefono' => $this->faker->randomElement([123456, 9876543]),
            'Correo' => $this->faker->email(),
            'tipo_documento_id' => Tipo_documento::all()->random()->id,
            'Numero_documento' => $this->faker->unique()->numberBetween($min = 1000, $max = 9000),
            'Domicilio' => $this->faker->address(),
            'origen_id' => Origen::all()->random()->id,
            'destino_id' => Destino::all()->random()->id,
            'motivo_viaje_id' => Motivo_viaje::all()->random()->id,
            'sexo_id' => Sexo::all()->random()->id,
        
        ];
    }
}
