<?php

namespace Database\Factories;

use App\Models\Ciudad;
use App\Models\Destino;
use Illuminate\Database\Eloquent\Factories\Factory;

class DestinoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Destino::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ciudad_id' => Ciudad::all()->random()->id,
        ];
    }
}
