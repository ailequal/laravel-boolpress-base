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
        for ($i=0; $i < 2; $i++) {
            $post = new Post;
            $post->title = $faker->text;
            $post->subtitle = $faker->text;
            $post->author = $faker->firstName() . ' ' . $faker->lastName();
            $post->subtitle = $faker->firstName();

            // $postNew = 
        }
    }
}
