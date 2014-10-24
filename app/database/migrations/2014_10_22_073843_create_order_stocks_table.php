<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderStocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//备货流水表
		Schema::create('order_stocks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('order')->unsigned();//订单关联ID
			$table->bigInteger('no')->default('0')->unsigned();//备货流水号
			$table->timestamps();
		});	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_stocks');
	}

}
