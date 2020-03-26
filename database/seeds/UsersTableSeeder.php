<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
            $user = new User;
            $user->name = $faker->firstName() . ' ' . $faker->lastName();
            $user->email = $faker->email();
            $user->password = Hash::make('secret-password-' . $i);
            $user->save();
        }
    }
}
