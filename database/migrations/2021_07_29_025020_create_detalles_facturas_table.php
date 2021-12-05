<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_facturas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('Id_servicio');
            $table->unsignedBigInteger('Id_precio');
            $table->unsignedBigInteger('Cantidad');
            $table->unsignedBigInteger('Precio_ventas');
            $table->unsignedBigInteger('Total_precio');
            $table->unsignedBigInteger('Total_IVA');
            $table->unsignedBigInteger('Total_descuento');
            $table->unsignedBigInteger('factura_id')->nullable();
            $table->foreign('factura_id')
            ->references('id')
            ->on('facturas')
            ->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_facturas');
    }
}
