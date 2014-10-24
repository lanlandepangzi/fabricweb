<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsWebcategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//网站商品分类表
		Schema::create('goods_webcategories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');//网站商品分类名称
			$table->string('description');//网站商品分类描述
			$table->integer('parent')->default('0')->unsigned();//父ID
			$table->integer('sort')->default('0')->unsigned();//排序值
			$table->tinyinteger('display')->default('0')->unsigned();//网站显示开关
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
		Schema::drop('goods_webcategories');
	}

}
