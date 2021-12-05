<?php

namespace Database\Factories;

use App\Models\Ciudad;
use App\Models\Origen;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrigenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Origen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ciudad_id' => Ciudad::all()->random()->id
        ];
    }
}
