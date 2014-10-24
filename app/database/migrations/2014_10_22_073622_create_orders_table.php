<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{//订单表
			$table->bigIncrements('id');
			$table->bigInteger('no')->unsigned()->unique();//订单编号
			$table->bigInteger('customer')->unsigned()->index();//订单客户关联ID
			$table->bigInteger('receive_address')->unsigned()->index();//收获地址关联ID
			$table->integer('payment_method')->unsigned()->index();//订单支付方式
			$table->integer('shipping_method')->unsigned()->index();//订单物流配送方式
			$table->string('status');//订单状态
			$table->decimal('item_fee')->default('0.00');//商品总计金额
			$table->integer('shipping_fee')->default('0')->unsigned();//物流费用
			$table->decimal('amount_fee')->default('0.00');//应付总计金额
			$table->integer('point_fee')->default('0')->unsigned();//积分抵扣
			$table->integer('credit_fee')->default('0')->unsigned();//信用抵扣
			$table->decimal('pay_fee')->default('0.00');//实际支付金额
			$table->integer('caution_money')->default('0')->unsigned();//保证金金额
			$table->tinyInteger('sample')->default('0')->unsigned();//订单类型 0-只有商品，1-带有色卡
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
		Schema::drop('orders');
	}

}
