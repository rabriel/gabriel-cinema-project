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
            $table->integer('film_id');
            $table->date('monday')->nullable();
            $table->date('tuesday')->nullable();;
            $table->date('wednesday')->nullable();;
            $table->date('thursday')->nullable();;
            $table->date('friday')->nullable();;
            $table->date('saturday')->nullable();;
            $table->date('sunday')->nullable();;
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
