<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderReturnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//退货处理表
		Schema::create('order_returns', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order')->index()->unsigned();//订单关联ID
			$table->bigInteger('customer')->index()->unsigned();//客户关联ID
			$table->string('reason');//退货原因
			$table->text('memo');//退货详细备注
			$table->tinyInteger('status')->default('0')->unsigned();//退货订单状态 0-未处理 1-同意退货
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
		Schema::drop('order_returns');
	}

}
