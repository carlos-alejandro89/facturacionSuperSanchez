<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesCorreoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes_correo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('facturacion_id');
            $table->unsignedInteger('estatus_id');
            $table->string('asunto');
            $table->string('mensaje');

            $table->foreign('facturacion_id')->references('id')->on('facturacion');
            $table->foreign('estatus_id')->references('id')->on('estatus');
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
        Schema::dropIfExists('mensajes_correo');
    }
}
