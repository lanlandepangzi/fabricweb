<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//订单支付表
		Schema::create('order_payments', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order')->unsigned()->index();//订单关联ID
			$table->string('no');//支付|银行流水号
			$table->timestamp('date');//支付时间
			$table->decimal('amount')->default('0.00');//支付金额
			$table->integer('payment_method')->unsigned()->index();//支付方式关联ID
			$table->text('memo');//支付备注
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
		Schema::drop('order_payments');
	}

}
