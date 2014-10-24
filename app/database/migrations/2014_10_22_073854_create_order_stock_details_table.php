<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderStockDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//备货详细以及打包详细表
		Schema::create('order_stcok_details', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('orderdetail')->unsigned()->index();//订单详细表关联ID
			$table->bigInteger('package')->unsigned()->index();//备货包装关联ID
			$table->integer('quantity')->default('0')->unsigned();//备货布匹米数
			$table->string('position')->index();//备货仓库位置
			$table->bigInteger('reference_item')->default('0')->unsigned()->index();//备货布匹已检验关联ID
			$table->bigInteger('stock')->default('0')->unsigned()->index();//备货流水关联ID
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
		Schema::drop('order_stock_details');
	}

}
