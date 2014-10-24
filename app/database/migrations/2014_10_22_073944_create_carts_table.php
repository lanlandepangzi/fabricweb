<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//门市购物车
		Schema::create('carts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('goods_no')->index();//商品型号
			$table->integer('quantity')->default('0')->unsigned();//预定数量
			$table->tinyInteger('sample')->default('0')->unsigned();//商品类型 0-商品 1-色卡
			$table->decimal('price_confirm')->default('0.00');//确认价格
			$table->string('craft_description');//加工备注
			$table->string('price_operator');//确认价格操作人员  客服
			$table->bigInteger('customer')->unsigned()->index();//客户关联ID
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
		Schema::drop('carts');
	}

}
