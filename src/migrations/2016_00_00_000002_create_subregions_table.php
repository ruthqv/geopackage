<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubregionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	

	if (!Schema::hasTable('subregions'))  {	


		Schema::create('subregions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->integer('region_id')->unsigned();
			$table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade')->onUpdate('cascade');
			$table->boolean('active')->default(1);
					
			$table->timestamps();
			$table->softDeletes();

		});


	}	
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subregions');
	}

}
