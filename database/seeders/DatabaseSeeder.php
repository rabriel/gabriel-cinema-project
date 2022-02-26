<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CinemaTableSeeder::class);
        $this->call(TheatreTableSeeder::class);
        $this->call(FilmTableSeeder::class);
        $this->call(BookingTableSeeder::class);
        $this->call(ShowtimeTableSeeder::class);
    }
}
