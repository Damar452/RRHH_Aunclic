<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posesions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipoposesion_id');
            $table->unsignedBigInteger('persona_id');
            $table->string('numero');
            $table->date('fechaposesion');
            $table->unsignedBigInteger('cargo_id');            
            $table->unsignedBigInteger('codigo_id');
            $table->unsignedBigInteger('grado_id');
            $table->unsignedBigInteger('planta_id');            
            $table->unsignedBigInteger('oficinaadscrita_id');
            $table->unsignedBigInteger('tipovinculacion_id');
            $table->date('fechaactoadministrativo');
            $table->unsignedBigInteger('tipoactoadministrativo_id');            
            $table->string('actoadministrativo');
            $table->string('cabildo');
            $table->string('ubicacioncabildo'); 
            $table->date('fechaasamblea'); 
            $table->unsignedBigInteger('user_id');                       
            $table->timestamps();       
            
            $table->foreign('tipoposesion_id')->references('id')->on('tipoposesions');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->foreign('codigo_id')->references('id')->on('codigos');
            $table->foreign('grado_id')->references('id')->on('grados');
            $table->foreign('planta_id')->references('id')->on('plantas');
            $table->foreign('oficinaadscrita_id')->references('id')->on('oficinaadscritas');
            $table->foreign('tipovinculacion_id')->references('id')->on('tipovinculacions');
            $table->foreign('tipoactoadministrativo_id')->references('id')->on('tipoactoadministrativos');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posesions');
    }
}
