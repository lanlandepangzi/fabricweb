<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//商品信息表
		Schema::create('goods', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('no')->unique();//商品型号
			$table->string('name')->index();//商品名称
			$table->string('image');//商品图片
			$table->bigInteger('imagehash')->index();//商品图片hsah值
			$table->decimal('price')->default('0.00');//商品价格
			$table->integer('web_stock')->default('0')->unsigned();//网站显示库存
			$table->decimal('web_marketprice')->default('0.00');//网站显示市场价
			$table->decimal('web_price')->default('0.00');//网站显示价格
			$table->integer('web_discout')->default('0')->unsigned();//网站显示折扣比
			$table->integer('web_category')->default('0')->index()->unsigned();//网站商品分类
			$table->tinyInteger('web_updown')->default('0')->unsigned();//网站商品上架
			$table->text('attrbute');//商品属性
			$table->bigInteger('sample')->default('0')->index()->unsigned();//关联色卡
			$table->string('web_type');//网站商品类型：new, popular, sale
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
		Schema::drop('goods');
	}

}
