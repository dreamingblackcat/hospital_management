<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddProfileableIdAndProfileableTypeToPeople extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('people', function(Blueprint $table)
		{
			$table->unsignedInteger('profileable_id')->nullable()->default(NULL);
			$table->string('profileable_type')->nullable()->default(NULL);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('people', function(Blueprint $table)
		{
			$table->dropColumn('profileable_id');
			$table->dropColumn('profileable_type');
		});
	}

}
