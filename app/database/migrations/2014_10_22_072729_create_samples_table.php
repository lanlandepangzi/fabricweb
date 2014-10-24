<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSamplesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//商品色卡表
		Schema::create('samples', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('no')->unique();//色卡型号
			$table->integer('stock')->default('0')->unsigned();//色卡库存
			$table->string('name')->index();//色卡名称
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
		Schema::drop('samples');
	}

}
