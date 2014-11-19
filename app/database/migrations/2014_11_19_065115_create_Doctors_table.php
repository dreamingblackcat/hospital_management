<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('education_info');
			$table->date('official_started_working_date');
			$table->unsignedInteger('expertise_area_id');
			// $table->unsignedInteger('person_id');
			$table->foreign('expertise_area_id')->references('id')->on('ExpertiseAreas');
			// $table->foreign('person_id')->references('id')->on('people');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('doctors');
	}

}
