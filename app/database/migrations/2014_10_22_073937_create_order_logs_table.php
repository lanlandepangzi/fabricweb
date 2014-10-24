<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//订单历史记录
		Schema::create('order_logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('order')->unsigned()->index();//订单关联ID
			$table->string('operator');//操作员
			$table->string('action');//操作内容，状态变更等历史记录
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
		Schema::drop('order_logs');
	}

}
