<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
            $randomNumber = rand(1, 3);
            $photo = new Photo;
            $photo->user_id = $randomNumber;
            $photo->file_name = $faker->numerify('img-###');
            $photo->url = 'https://picsum.photos/id/' . rand(1, 100) . '/300/200';
            $photo->save();
        }
    }
}
