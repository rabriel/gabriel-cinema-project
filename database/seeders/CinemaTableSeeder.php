<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CinemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cinemas')->insert(['name' => 'Cinema 1', 'created_at' => new \DateTime()]);
        DB::table('cinemas')->insert(['name' => 'Cinema 2', 'created_at' => new \DateTime()]);
    }
}
