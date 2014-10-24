<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//库存表
		Schema::create('stocks', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('goods')->unsigned()->index();//商品关联ID
			$table->integer('warehouse')->default('0')->unsigned();//仓库库存数量
			$table->integer('up')->default('0')->unsigned();//预录入到货库存数量
			$table->integer('other')->default('0')->unsigned();//预计生产库存数量
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
		Schema::drop('stocks');
	}

}
