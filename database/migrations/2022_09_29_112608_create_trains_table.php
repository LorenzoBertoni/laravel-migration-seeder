<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 255);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->dateTime('departure_time', 0);
            $table->dateTime('arrival_time', 0);
            $table->unsignedInteger('train_code');
            $table->unsignedTinyInteger('n_of_carriages');
            $table->boolean('isInTime');	
            $table->boolean('isCancelled');
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
        Schema::dropIfExists('trains');
    }
}
