<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DoctorsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('doctors')->delete();
		$faker = Faker::create();
		$expertise_areas = ExpertiseArea::all();
		$people = Person::all();
		foreach(range(0,4) as $index)
		{
			$doctor = Doctor::create([
				'education_info' => $faker->realText($faker->numberBetween(10,20)),
				'official_started_working_date' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years')
			]);
			$doctor->expertise_areas()->save(ExpertiseArea::skip($index)->first());
			// $doctor->person()->save(new Person((array)$people[$index]));
			// $people[$index]->profileable()->associate($doctor);
			$doctor->person()->save($people[$index]);
		}
	}

}