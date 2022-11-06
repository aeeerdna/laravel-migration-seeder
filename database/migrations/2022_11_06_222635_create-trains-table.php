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
        //
        Schema::create('trains', function(Blueprint $table){
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->date('departure_date');
            $table->time('departure_time');
            $table->string('arrival_station', 50);
            $table->date('arrival_date');
            $table->time('arrival_time');
            $table->string('train_code', 15)->unique();
            $table->tinyInteger('carriage_number')->unsigned()->default(0);
            $table->boolean('in_time')->default(true);
            $table->tinyInteger('canceled')->default(0);
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
        //
        Schema::dropIfExists('trains');
    }
}
