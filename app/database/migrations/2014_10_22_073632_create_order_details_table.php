<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_details', function(Blueprint $table)
		{//订单商品明细表
			$table->bigIncrements('id');
			$table->bigInteger('order')->unsigned()->index();//订单关联ID
			$table->bigInteger('goods')->unsigned()->index();//商品关联ID
			$table->integer('quantity')->default('0')->unsigned();//预定数量
			$table->integer('quantity_confirm')->default('0')->unsigned();//实际备货数量，确认购买数量
			$table->decimal('price')->default('0.00');//确认购买价格
			$table->string('price_operator');//价格确认操作人，客服
			$table->integer('delivery_quantity')->default('0')->unsigned();//实际发货数量
			$table->string('craft_description');//需要加工备注
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
		Schema::drop('order_details');
	}

}
