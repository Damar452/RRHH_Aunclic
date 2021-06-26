<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropConsecutivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('consecutivos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('consecutivos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('tipoposesion_id');
            $table->string('consecutivo');
            $table->date('fecha');
            $table->timestamps();   

            $table->foreign('tipoposesion_id')->references('id')->on('tipoposesions');
        });
    }
}
