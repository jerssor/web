<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->date('Fecha_factura');
            $table->unsignedBigInteger('Metodo_pago');
            $table->unsignedBigInteger('Total_factura');
            $table->unsignedBigInteger('Total_IVA');
            $table->unsignedBigInteger('Total_descuentos');
            $table->unsignedBigInteger('huespedes_id')->nullable();
            $table->foreign('huespedes_id')
            ->references('id')
            ->on('huespedes')
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
        Schema::dropIfExists('facturas');
    }
}
