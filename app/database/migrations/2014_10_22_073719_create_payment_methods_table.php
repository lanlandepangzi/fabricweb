<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentMethodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//支付方式表
		Schema::create('payment_methods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');//支付方式名称
			$table->text('content');//支付方式内容|银卡卡，持卡人等
			$table->tinyInteger('web')->default('0')->unsigned();//是否在线支付 0-线下 1-线上 
			$table->tinyInteger('display')->default('0')->unsigned();//前台是否显示 0-不显示 1-显示
			$table->integer('sort')->default('0')->unsigned(); //排序值
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
		Schema::drop('payment_methods');
	}

}
