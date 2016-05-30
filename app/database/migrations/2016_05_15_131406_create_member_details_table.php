<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('member_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('member_id')->unsigned()->index();
			$table->foreign('member_id')
				      ->references('id')->on('members')
				      ->onDelete('cascade')->onUpdate('cascade');

			$table->string('father');
			$table->string('mother');
			$table->string('address');

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
		Schema::drop('member_details');
	}

}
