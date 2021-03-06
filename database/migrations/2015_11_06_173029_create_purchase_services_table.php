<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_services', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('number_in_row');
			$table->string('title',100);
			$table->string('image',150);
			$table->double('price', 10, 2)->nullable();
			$table->integer('status')->default(0);
			$table->integer('max_quantity')->default(10);
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
		Schema::drop('purchase_services');
	}

}
