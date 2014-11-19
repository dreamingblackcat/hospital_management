<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PeopleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('people')->delete();
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Person::create([
				"name" => $faker->username,
				"phone_number" => "09123456",
				"nrc_number" => "9/LaWaNa(N)123456",
				"date_of_birth" => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years'),
				"nationality" => "Myanmar",
				"ethnic_group" => "Burma",
				"father_name" => $faker->username,
				"contact_email" => $faker->email
			]);
		}
	}

}