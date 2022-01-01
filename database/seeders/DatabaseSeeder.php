<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Ticket;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Movie::truncate();
        Ticket::truncate();

        $user = User::factory()->create();
        $user2 = User::factory()->create();
        $user3 = User::factory()->create();

        $movie = Movie::factory()->create();
        $movie2 = Movie::factory()->create();
        $movie3 = Movie::factory()->create();
        $movie4 = Movie::factory()->create();


        Ticket::factory(3)->create([
            'user_id' => $user->id,
            'movie_id' => $movie->id,
        ]);
        Ticket::factory(2)->create([
            'user_id' => $user2->id,
            'movie_id' => $movie4->id,
        ]);
        Ticket::factory(4)->create([
            'user_id' => $user3->id,
            'movie_id' => $movie2->id,
        ]);
        Ticket::factory(2)->create([
            'user_id' => $user->id,
            'movie_id' => $movie3->id,
        ]);

    }
}
