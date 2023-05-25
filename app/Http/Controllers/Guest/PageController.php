<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->timestamps();
            $table->string('company', 20);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            // dateTimeTz is used because the departure and arrival locations can have different timezone
            $table->dateTimeTz('departure_time'); 
            $table->dateTimeTz('arrival_time');
            $table->string('train_code', 10);
            $table->unsignedTinyInteger('wagons');
            // Train is in time and not cancelled by default
            $table->boolean('in_time')->default(1);
            $table->boolean('cancelled')->default(0);
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
};
