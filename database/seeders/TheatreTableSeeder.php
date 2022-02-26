<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TheatreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theatres')->insert(['cinema_id'=> 1, 'name' => 'Theatre 1', 'seats' => 30, 'created_at' => new \DateTime() ]);
        DB::table('theatres')->insert(['cinema_id'=> 1, 'name' => 'Theatre 2', 'seats' => 30, 'created_at' => new \DateTime() ]);
        DB::table('theatres')->insert(['cinema_id'=> 2, 'name' => 'Theatre 1', 'seats' => 30, 'created_at' => new \DateTime() ]);
        DB::table('theatres')->insert(['cinema_id'=> 2, 'name' => 'Theatre 2', 'seats' => 30, 'created_at' => new \DateTime() ]);

    }
}
