<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('centro_id')->nullable();
            $table->unsignedInteger('empleado_id')->nullable();
            $table->unsignedInteger('uso_cfdi_id');
            $table->unsignedInteger('regimen_id');
            $table->unsignedInteger('estatus_id');
            $table->date('fecha_ticket');
            $table->string('num_ticket');
            $table->string('num_tienda');
            $table->string('num_caja');
            $table->float('monto_compra');
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
            $table->string('file_xml')->nullable();
            $table->string('file_pdf')->nullable();
            $table->string('tae_autorizacion')->nullable();
            $table->string('tae_num_telefono')->nullable();
            $table->date('fecha_solicitud');
            $table->date('fecha_atencion')->nullable();
            $table->string('uniqid');

            $table->foreign('centro_id')->references('id')->on('centros');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('regimen_id')->references('id')->on('sat_regimen_fiscal');
            $table->foreign('uso_cfdi_id')->references('id')->on('sat_uso_cfdi');
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
        Schema::dropIfExists('facturacion');
    }
}
