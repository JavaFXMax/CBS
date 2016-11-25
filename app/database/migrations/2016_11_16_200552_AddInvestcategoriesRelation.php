<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInvestcategoriesRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('investmentcategories',function($table){
			$table->increments('id');
			$table->string('name');			
			$table->string('code');
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
		Schema::drop('investmentcategories');
	}

}
