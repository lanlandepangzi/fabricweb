<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWarehousesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//商品仓库存放表
		Schema::create('warehouses', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('goods_no')->index();//商品型号|编码
			$table->string('no')->index();//存放位置
			$table->integer('quantity')->default('0')->unsigned();//数量
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
		Schema::drop('warehouses');
	}

}
