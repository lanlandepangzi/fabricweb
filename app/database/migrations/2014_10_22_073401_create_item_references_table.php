<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//检验报告编码表
		Schema::create('item_references', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('goods')->index();//商品型号|编码
			$table->string('identity')->index();//检验报告号
			$table->tinyInteger('used')->default('0')->unsigned();//0-未使用 1-使用
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
		Schema::drop('item_references');
	}

}
