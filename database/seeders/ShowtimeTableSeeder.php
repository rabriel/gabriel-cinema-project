<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ShowtimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('showtimes')->insert(['film_id' => 2, 'thursday' => '2022-03-03 20:00:00']);
        DB::table('showtimes')->insert(['film_id' => 3, 'friday' => '2022-03-04 21:00:00']);
        DB::table('showtimes')->insert(['film_id' => 7, 'saturday' => '2022-03-05 18:00:00']);
        DB::table('showtimes')->insert(['film_id' => 8, 'sunday' => '2022-03-06 20:00:00']);
    }
}
