<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;
use App\Models\Vinyle;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tags = Tag::factory(10)->create();
        $artists = Artist::factory(10)->create();

        // Vérifie qu'il y a bien des artistes
        if ($artists->isEmpty()) {
            throw new \Exception("No artists found in the database.");
        }

        // Créer les vinyles et assigner un artiste et des tags
        Vinyle::factory(20)->make()->each(function ($vinyle) use ($artists, $tags) {

            $vinyle->artist_id = $artists->random()->id;
            $vinyle->save();

            $vinyle->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }

}
