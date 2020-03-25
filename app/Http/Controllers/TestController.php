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
            $post->title = $faker->text;
            $post->subtitle = $faker->text;
            $post->author = $faker->firstName() . ' ' . $faker->lastName();
            $post->subtitle = $faker->firstName();
            var_dump($post);
    }
}
