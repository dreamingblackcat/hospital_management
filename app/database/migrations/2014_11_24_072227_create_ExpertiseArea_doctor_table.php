<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExpertiseAreaDoctorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ExpertiseArea_doctor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ExpertiseArea_id')->unsigned()->index();
			$table->foreign('ExpertiseArea_id')->references('id')->on('ExpertiseAreas')->onDelete('cascade');
			$table->integer('doctor_id')->unsigned()->index();
			$table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
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
		Schema::drop('ExpertiseArea_doctor');
	}

}
