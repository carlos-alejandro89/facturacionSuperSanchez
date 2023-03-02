<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatRegimenUsoCfdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sat_regimen_uso_cfdi', function (Blueprint $table) {
            $table->unsignedInteger('regimen_id');
            $table->unsignedInteger('uso_cfdi_id');
            $table->foreign('regimen_id')->references('id')->on('sat_regimen_fiscal');
            $table->foreign('uso_cfdi_id')->references('id')->on('sat_uso_cfdi');
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
        Schema::dropIfExists('sat_regimen_uso_cfdi');
    }
}
