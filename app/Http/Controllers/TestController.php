<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Generator as Faker;
use App\Post;

class TestController extends Controller
{
    public function index(Faker $faker)
    {
            $post = new Post;
            $post->title = $faker->catchPhrase();
            $post->subtitle = $faker->bs();
            $post->text = $faker->realText($maxNbChars = 500, $indexSize = 2);
            $post->author = $faker->firstName() . ' ' . $faker->lastName();
            $post->collaborator = $faker->firstName() . ' ' . $faker->lastName();
            $post->language = $faker->locale();
            $post->topic = $faker->word();
            $post->external_link = $faker->url();
            var_dump($post);
    }
}
