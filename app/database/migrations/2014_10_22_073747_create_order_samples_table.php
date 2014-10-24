<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderSamplesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//订单色卡表
		Schema::create('order_samples', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order')->unsigned()->index();//订单关联ID
			$table->bigInteger('sample')->unsigned()->index();//色卡关联ID
			$table->integer('quantity')->default('0')->unsigned();//色卡数量
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
		Schema::drop('order_samples');
	}

}
