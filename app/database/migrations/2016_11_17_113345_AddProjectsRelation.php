<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects',function($table){
			$table->increments('id');
			$table->string('name');	
			$table->integer('investment_id');
			$table->integer('units');		
			$table->decimal('unit_price',15,2);
			$table->string('description')->nullable();
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
		Schema::drop('projects');
	}

}
