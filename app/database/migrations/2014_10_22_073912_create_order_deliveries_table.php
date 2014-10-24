<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderDeliveriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//发货清单流水表
		Schema::create('order_deliveries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('order')->unsigned();//订单关联ID
			$table->bigInteger('no')->default('0')->unsigned();//发货流水号
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
		Schema::drop('order_deliveries');
	}

}
