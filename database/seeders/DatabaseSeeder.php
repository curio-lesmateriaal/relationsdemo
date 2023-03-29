<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        
        $names = collect(['Last Friday Night', 'Rhytmic Rap', 'Best Bars', 'Cool Breeze', 'The Mixtape', 'One Hit Wonders', 'Ear Drugs', 'Viral Dance']);
        foreach(\App\Models\User::all() as $user)
        {
            for($i = 0; $i < rand(3, count($names)); $i++)
            {
                \App\Models\Playlist::create([
                    'name' => $names->random(),
                    'user_id' => $user->id
                ]);
            }
        }

        $playlists = \App\Models\Playlist::all();
        for ($i = 0; $i < 50; $i++)
        { 
            $song = \App\Models\Song::create([
                'title' => ucfirst(fake()->words(4, true)),
                'artist' => ucfirst(fake()->word()),
                'album' => ucfirst(fake()->words(2, true))
            ]);

            foreach($playlists->random(rand(2, 10)) as $playlist)
            {
                DB::table('playlist_song')->insert([
                    'playlist_id' => $playlist->id,
                    'song_id' => $song->id
                ]);
            }
            
        }


    }
}
