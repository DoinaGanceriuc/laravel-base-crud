<?php

use App\Models\Movie;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $movie = new Movie();
            $movie->image = $faker->imageUrl();
            $movie->title = $faker->sentence();
            $movie->original_title = $faker->sentence();
            $movie->description = $faker->paragraphs(5, true);
            $movie->genre = $faker->word();
            $movie->is_available = $faker->boolean(50);
            $movie->save();
        }
    }
}
