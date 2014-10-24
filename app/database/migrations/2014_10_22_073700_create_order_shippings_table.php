<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderShippingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//订单物流配送表
		Schema::create('order_shippings', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order')->unsigned()->index();//订单关联ID
			$table->timestamp('date');//配送时间
			$table->string('no');//物流单号
			$table->integer('shipping_method')->index()->unsigned();//物流方式
			$table->string('carrier');//物流单位
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
		Schema::drop('order_shippings');
	}

}
