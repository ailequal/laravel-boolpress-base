<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Avatar;

class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 5; $i++) {
            $avatar = new Avatar;
            $avatar->user_id = $i;
            $avatar->url = 'https://i.pravatar.cc/150?img=' . rand(1, 30);
            $avatar->save();
        }
    }
}
