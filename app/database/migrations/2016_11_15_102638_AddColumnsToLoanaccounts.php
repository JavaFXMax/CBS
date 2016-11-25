<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToLoanaccounts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loanaccounts',function($table){
			$table->integer('matrix_id')->nullable();	
			$table->string('matrix_photo')->nullable();				
		});		
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loanaccounts',function($table){
			$table->dropColumn('matrix_id');
			$table->dropColumn('matrix_photo');			
		});		
	}

}