<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sector_detail', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('sector_id')->unsigned()->index();
			$table->foreign('sector_id')
				      ->references('id')->on('sectors')
				      ->onDelete('cascade')->onUpdate('cascade');

			$table->string('title');
			$table->string('description');

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
		Schema::drop('sector_detail');
	}

}
