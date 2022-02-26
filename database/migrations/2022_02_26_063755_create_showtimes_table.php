<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowtimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showtimes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('film_id')->unsigned();
            $table->date('monday');
            $table->date('tuesday');
            $table->date('wednesday');
            $table->date('thursday');
            $table->date('friday');
            $table->date('saturday');
            $table->date('sunday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showtimes');
    }
}
