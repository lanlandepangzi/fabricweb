<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsAttrbuteValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//商品属性值表
		Schema::create('goods_attrbute_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group')->index()->unsigned();//属性分组关联ID
			$table->string('value');//属性值
			$table->integer('sort')->default('0')->unsigned();//排序值
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
		Schema::drop('goods_attrbute_values');
	}

}
