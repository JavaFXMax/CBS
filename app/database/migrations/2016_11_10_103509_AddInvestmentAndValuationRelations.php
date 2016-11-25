<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInvestmentAndValuationRelations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('investments',function($table){
			$table->increments('id');
			$table->string('name');
			$table->integer('vendor_id')->unsigned()->nullable();
			$table->decimal('valuation',15,2);
			$table->enum('growth_type',array('Appreciation','Depreciation'));
			$table->decimal('growth_rate',2,1);
			$table->date('date');
			$table->text('description')->nullable();
			$table->timestamps();	
		});	

		Schema::create('valuations',function($table){
			$table->increments('id');			
			$table->integer('investment_id')->unsigned()->nullable();
			$table->decimal('valuation',15,2);
			$table->string('month');
			$table->string('year');
			$table->date('date');
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
		Schema::drop('investments');
		Schema::drop('valuations');
	}

}
