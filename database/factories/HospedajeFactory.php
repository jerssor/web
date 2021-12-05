<?php

namespace Database\Factories;

use App\Models\Hospedaje;
use App\Models\Tipo_hospedaje;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HospedajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hospedaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'NIT' => $this->faker->unique()->numberBetween($min = 1000, $max = 9000),
            'Nombre' => $name,
            'slug' => Str::slug($name, '-'),
            'user_id' => User::all()->random()->id,
            'Telefono' => $this->faker->randomElement([123456, 9876543]),
            'Correo' => $this->faker->unique()->email(),
            'Direccion' => $this->faker->address(),
            'logo' => $this->faker->image(),
            'status' => $this->faker->randomElement([1, 2]),
            'tipo_hospedaje_id' => Tipo_hospedaje::all()->random()->id,
            'Descripcion' => $this->faker->text(50)
        ];
    }
}
