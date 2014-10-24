<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWarehouseInoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//商品仓库进出记录表
		Schema::create('warehouse_inouts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('item')->unique();//布匹关联ID
			$table->string('goods_no')->index();//商品型号|编码
			$table->integer('quantity')->default('0')->unsigned();//数量
			$table->string('operator');//操作员
			$table->tinyinteger('action')->default('0')->unsigned();//0-进仓，1-出仓
			$table->string('memo');//备注
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
		Schema::drop('warehouse_inouts');
	}

}
