<?php

namespace Database\Seeders;

use App\Models\Hospedaje;
use App\Models\Image;
use Illuminate\Database\Seeder;

class HospedajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospedajes = Hospedaje::factory(200)->create();

        foreach ($hospedajes as $hospedaje){
            Image::factory(1)->create([
                'imageable_id'=>$hospedaje->id,
                'imageable_type'=>Hospedaje::class
            ]);
        }

    }
}
