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
            $table->unsignedInteger('regimen_id');
            $table->string('razon_social');
            $table->string('rfc');
            $table->string('calle')->nullable();
            $table->string('num_exterior')->nullable();
            $table->string('num_interior')->nullable();
            $table->string('colonia')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('estado')->nullable();
            $table->string('codigo_postal');
            $table->string('correo_electronico');
            $table->timestamps();

            $table->foreign('regimen_id')->references('id')->on('sat_regimen_fiscal');
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
