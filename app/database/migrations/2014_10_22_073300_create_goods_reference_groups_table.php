<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsReferenceGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//商品编码属性分组表
		Schema::create('goods_reference_groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');//分组名
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
		Schema::drop('goods_reference_groups');
	}

}
