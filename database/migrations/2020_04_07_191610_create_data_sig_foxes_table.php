<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataSigFoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sig_foxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device', 100);
            $table->string('hum', 100);
            $table->string('temp', 100);
            $table->string('shum', 100);
            $table->string('stemp', 100);
            $table->string('bateria', 100);
            $table->string('lat', 100);
            $table->string('lng', 100);
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
        Schema::dropIfExists('data_sig_foxes');
    }
}
