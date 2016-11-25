<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRejectionFlagstoProjectordersRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_orders',function($table){
			$table->boolean('is_rejected')->default(0);	
			$table->date('date_rejected');						
		});		
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_orders',function($table){			
			$table->dropColumn('is_rejected');	
			$table->dropColumn('date_rejected');		
		});		
	}

}