<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConsecutivoIdToPosesions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posesions', function (Blueprint $table) {
            $table->string('consecutivo')->nullable()->after('numero');
            $table->date('fecha')->nullable()->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posesions', function (Blueprint $table) {
            $table->dropColumn('consecutivo');
            $table->dropColumn('fecha');
        });
    }
}
