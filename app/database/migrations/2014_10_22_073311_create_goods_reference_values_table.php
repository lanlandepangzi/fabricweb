<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsReferenceValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//编码属性值表
		Schema::create('goods_reference_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group')->unsigned()->index();//属性分组关联ID
			$table->string('code');//分组编码
			$table->integer('sort')->default('0')->unsigned();//排序值
			$table->string('value');//分组值
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
		Schema::drop('goods_reference_values');
	}

}
