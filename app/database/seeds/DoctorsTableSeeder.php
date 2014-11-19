<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DoctorsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('doctors')->delete();
		$faker = Faker::create();
		$expertise_areas = DB::table('ExpertiseAreas')->get();
		$people = DB::table('people')->take(5)->get();
		// dd(array_rand($expertise_areas));
		foreach(range(1,5) as $index)
		{
			Doctor::create([
				'education_info' => $faker->realText($faker->numberBetween(10,20)),
				'expertise_area_id' => $expertise_areas[array_rand($expertise_areas)]->id,
				'official_started_working_date' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years')
			]);
		}
	}

}