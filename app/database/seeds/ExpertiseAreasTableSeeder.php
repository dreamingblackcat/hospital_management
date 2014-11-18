<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Faker\Provider\ja_JP\Person as JapanGuy;

class ExpertiseAreasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$faker->addProvider(new JapanGuy($faker));
		

		foreach(range(1, 10) as $index)
		{
			ExpertiseArea::create([
				'name' => $faker->kanaName
			]);
		}
	}

}