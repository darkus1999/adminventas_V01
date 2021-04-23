<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cuenta')->unsigned();
            $table->foreign('id_cuenta')->references('id')->on('cuentas');
            $table->integer('id_articulo')->unsigned();
            $table->foreign('id_articulo')->references('id')->on('articulos');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->decimal('precio_venta', 11, 2);
            $table->decimal('cantidad', 10, 2);
            $table->decimal('descuento', 11, 2);
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
        Schema::dropIfExists('detalle_pedidos');
    }
}
