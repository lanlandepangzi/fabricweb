<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufactureDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//生产明细表
		Schema::create('manufacture_details', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order')->unsigned()->index();//生产订单关联ID
			$table->string('goods_no')->index();//花型
			$table->integer('quantity')->default('0')->unsigned();//数量
			$table->decimal('price')->default('0.00');//价格
			$table->string('attr_yarn');//支纱
			$table->string('attr_weave');//织造
			$table->string('attr_lon');//经密
			$table->string('attr_lat');//纬密
			$table->string('attr_width');//门幅
			$table->string('attr_weight');//短溢
			$table->string('attr_shrink');//缩水
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
		Schema::drop('manufacture_details');
	}

}
