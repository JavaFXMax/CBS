<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMatricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matrices',function($table){
			$table->increments('id');
			$table->string('name');			
			$table->decimal('maximum',15,2);
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
		Schema::drop('matrices');
	}

}
