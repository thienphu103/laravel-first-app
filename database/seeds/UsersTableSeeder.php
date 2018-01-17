<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
  $faker = Faker\Factory::create();

    for($i = 0; $i < 1000; $i++) {
        App\User::create([
            'name' => $faker->Name,
            'username' => $faker->userName,
            'email' => $faker->email,
	    'password'=> $faker->password,
        ]);
    }

}

}
