<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderDeliveryPackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//发货打包表
		Schema::create('order_delivery_packages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('no');//包号
			$table->bigInteger('order')->unsigned()->index();//订单关联ID
			$table->integer('item_count')->default('0')->unsigned();//匹数
			$table->integer('quantity')->default('0')->unsigned();//米数
			$table->decimal('amount')->default('0.00');//金额
			$table->bigInteger('delivery')->default('0')->unsigned()->index();//发货流水关联ID
			$table->string('operator');//打包操作员
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
		Schema::drop('order_delivery_packages');
	}

}
