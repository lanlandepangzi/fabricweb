<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//商品相册表
		Schema::create('goods_albums', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('goods')->index()->unsigned();//关联商品ID
			$table->string('file');//相册图片文件
			$table->integer('sort')->default('0')->unsigned();//排序值
			$table->string('title');//相册图片描述
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
		Schema::drop('goods_albums');
	}

}
