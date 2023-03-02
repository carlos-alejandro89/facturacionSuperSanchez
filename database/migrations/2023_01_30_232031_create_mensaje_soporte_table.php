<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajeSoporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje_soporte', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('soporte_id');            
            $table->integer('msj_sifol_id')->nullable();
            $table->string('remitente');
            $table->string('destinatario')->nullable();
            $table->text('mensaje');

            $table->foreign('soporte_id')->references('id')->on('soporte');
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
        Schema::dropIfExists('mensaje_soporte');
    }
}
