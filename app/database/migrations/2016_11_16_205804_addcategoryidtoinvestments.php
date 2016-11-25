<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addcategoryidtoinvestments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('investments',function($table){
			$table->integer('category_id')->unsigned();						
		});		
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('investments',function($table){			
			$table->dropColumn('category_id');			
		});		
	}

}