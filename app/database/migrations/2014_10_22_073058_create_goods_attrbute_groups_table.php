<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsAttrbuteGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//商品属性分组表
		Schema::create('goods_attrbute_groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');//分组名
			$table->enum('type', array('text', 'radio', 'checkbox'));//类型：文本，单选，多选
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
		Schema::drop('goods_attrbute_groups');
	}

}
