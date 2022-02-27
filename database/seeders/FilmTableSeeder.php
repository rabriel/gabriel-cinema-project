<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Currently Showing on Theater 1 Cinema 1
        DB::table('films')->insert([
            'theatre_id'=> 1,
            'title' => 'Batman',
            'description' => 'When the Riddler, a sadistic serial killer, begins murdering key political figures in Gotham, Batman is forced to investigate the city\'s hidden corruption and question his family\'s involvement.',
            'duration' => '2h 56m',
            'image' => 'batman.jpg',
            'created_at' => new \DateTime()
            ]);

        DB::table('films')->insert([
            'theatre_id'=> 1,
            'title' => 'Spiderman',
            'description' => 'For the first time in the cinematic history of Spider-Man, our friendly neighborhood hero is unmasked and no longer able to separate his normal life from the high-stakes of being a Super Hero. When he asks for help from Doctor Strange, the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.',
            'duration' => '2h 28m',
            'image' => 'spiderman.jpg',
            'created_at' => new \DateTime()
        ]);

        //Currently Showing on Theater 2 Cinema 2

        DB::table('films')->insert([
            'theatre_id'=> 2,
            'title' => 'Cinderella',
            'description' => 'Laurent Pelly’s storybook staging of Massenet’s Cendrillon is presented with an all-new English translation in an abridged 90-minute adaptation, with mezzo-soprano Isabel Leonard as its rags-to-riches princess. Maestro Emmanuel Villaume leads a delightful cast, which includes mezzo-soprano Emily D’Angelo as Cinderella’s Prince Charming, soprano Jessica Pratt as her Fairy Godmother, and mezzo-soprano Stephanie Blythe and bass-baritone Laurent Naouri as her feuding guardians.',
            'duration' => '2h 7m',
            'image' => 'cinderella.jpg',
            'created_at' => new \DateTime()
        ]);

        DB::table('films')->insert([
            'theatre_id'=> 2,
            'title' => 'Redeeming Love',
            'description' => 'Sold into prostitution as a child, Angel knows nothing but betrayal. Can her heart ever be mended? Based upon the novel by Francine Rivers.',
            'duration' => '2h 14m',
            'image' => 'redeeming-love.jpg',
            'created_at' => new \DateTime()

        ]);
        
    }
}
