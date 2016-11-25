<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectOrdersRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_orders',function($table){
			$table->increments('id');			
			$table->integer('member_id');
			$table->integer('units');		
			$table->date('date');
			$table->boolean('is_approved')->default(0);
			$table->date('date_approved');			
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
		Schema::drop('project_orders');
	}

}
