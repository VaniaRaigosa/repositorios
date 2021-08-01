<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cliente_numero', 255);
            $table->string('nombre_cliente', 255);
            $table->string('apellido_paterno', 255);
            $table->string('apellido_materno', 255);
            $table->string('razon_social', 255);
            $table->string('rfc', 255);
            $table->string('direccion', 255);
            $table->string('pais', 255);
            $table->string('correo_electronico', 255);
            $table->string('telefono');
            $table->string('estado_cliente', 255);
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
        Schema::dropIfExists('clientes');
    }
}
