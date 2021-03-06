<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		$faker = Faker::create();

		
			User::create([
				'username' => 'jj',
				'email' => 'jj@gmail.com',
				'password' => Hash::make('jj'),
				'remember_token' => Hash::make('abc')
			]);
	}

}