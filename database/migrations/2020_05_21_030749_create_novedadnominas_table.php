<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovedadnominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedadnominas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('salud_id');
            $table->unsignedBigInteger('pension_id');            
            $table->unsignedBigInteger('arp_id');
            $table->unsignedBigInteger('banco_id');
            $table->string('numerocuenta');
            $table->timestamps(); 
                  
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('salud_id')->references('id')->on('saluds');
            $table->foreign('pension_id')->references('id')->on('pensions');
            $table->foreign('arp_id')->references('id')->on('arps');
            $table->foreign('banco_id')->references('id')->on('bancos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novedadnominas');
    }
}
