<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentMOdeColumnProjectOrdersRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_orders',function($table){
			$table->enum('payment_mode',
				array('Loan Transfer','Savings Transfer','Mpesa Payment','Cash Payment'));									
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
			$table->dropColumn('payment_mode');					
		});		
	}

}