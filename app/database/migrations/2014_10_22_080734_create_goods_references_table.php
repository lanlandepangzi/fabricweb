<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//商品编码表
		Schema::create('goods_references', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('no')->unique();//商品编码
			$table->tinyInteger('used')->default('0')->unsigned();//0-未使用，1-已使用
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
		Schema::drop('goods_references');
	}

}
