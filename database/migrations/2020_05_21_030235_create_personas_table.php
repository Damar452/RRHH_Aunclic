<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->unsignedBigInteger('tipodocumento_id');
            $table->string('documento');
            $table->unsignedBigInteger('expedicion_paice_id');
            $table->unsignedBigInteger('expedicion_departamento_id');            
            $table->unsignedBigInteger('expedicion_municipio_id');
            $table->date('fechanacimiento');
            $table->unsignedBigInteger('residencia_paice_id');
            $table->unsignedBigInteger('residencia_departamento_id');            
            $table->unsignedBigInteger('residencia_municipio_id');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('sexo');            
            $table->unsignedBigInteger('estadocivil_id');
            $table->timestamps(); 
                  
            $table->foreign('tipodocumento_id')->references('id')->on('tipodocumentos');
            $table->foreign('expedicion_paice_id')->references('id')->on('paices');
            $table->foreign('expedicion_departamento_id')->references('id')->on('departamentos');
            $table->foreign('expedicion_municipio_id')->references('id')->on('municipios');
            $table->foreign('residencia_paice_id')->references('id')->on('paices');
            $table->foreign('residencia_departamento_id')->references('id')->on('departamentos');
            $table->foreign('residencia_municipio_id')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
