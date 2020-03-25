<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $post = new Post;
            $post->title = $faker->catchPhrase();
            $post->subtitle = $faker->bs();
            $post->text = $faker->realText($maxNbChars = 500, $indexSize = 2);
            $post->author = $faker->firstName() . ' ' . $faker->lastName();
            $post->collaborator = $faker->firstName() . ' ' . $faker->lastName();
            $post->language = $faker->locale();
            $post->topic = $faker->word();
            $post->external_link = $faker->url();
            $post->save();
        }
    }
}
