<?php

namespace Database\Seeders;

use App\Models\Agencia_viaje;
use App\Models\Allservicio;
use App\Models\Ciudad;
use App\Models\Comercial;
use App\Models\Destino;
use App\Models\Detalle_factura;
use App\Models\Factura;
use App\Models\Gastronomia;
use App\Models\Guia_turistico;
use App\Models\Habitacion;
use App\Models\Historico;
use App\Models\Huespedes;
use App\Models\Motivo_viaje;
use App\Models\No_comercial;
use App\Models\Origen;
use App\Models\Pais;
use App\Models\Parque;
use App\Models\Registro;
use App\Models\Sexo;
use App\Models\Tipo_documento;
use App\Models\Tipo_hospedaje;
use App\Models\User;
use App\Models\Pregunta_frecuente;
use App\Models\Reserva;
use App\Models\Transporte;
use App\Models\Habitacion_hospedaje;
use App\Models\Metodo_pago;
use App\Models\Precio;
use App\Models\Servicio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('hospedajes');

        // \App\Models\User::factory(10)->create();
       

        $this->call(RoleSeeder::class);
        User::create([
            'name' => 'Juanita Garcia contreras',
            'email'  => 'juana100295@gmail.com',
            'password'  => bcrypt('12345678')
        ])->assignRole('admin');
        
        User::factory(99)->create();
        Registro::factory(50)->create();
        Motivo_viaje::factory(3)->create();
        Sexo::factory(2)->create();
        Tipo_documento::factory(4)->create();
        Pais::factory(10)->create();
        Ciudad::factory(150)->create();
        Origen::factory(2)->create();
        Destino::factory(2)->create();
        Metodo_pago::factory(3)->create();
        Huespedes::factory(100)->create();
        Factura::factory(60)->create();
        Tipo_hospedaje::factory(4)->create();
        Pregunta_frecuente::factory(5)->create();
        $this->call(HospedajeSeeder::class);
        Habitacion::factory(6)->create();
        Reserva::factory(10)->create();
        Gastronomia::factory(5)->create();
        Parque::factory(6)->create();
        Historico::factory(3)->create();
        Comercial::factory(5)->create();
        No_comercial::factory(6)->create();
        Transporte::factory(7)->create();
        Agencia_viaje::factory(4)->create();
        Guia_turistico::factory(2)->create();
        Habitacion_hospedaje::factory(100)->create();
        Servicio::factory(7)->create();
        Precio::factory(20)->create();
        Detalle_factura::factory(30)->create();
        Allservicio::factory(100)->create();
       
    }
}