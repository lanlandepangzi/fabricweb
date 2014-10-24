<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSamplewarehousesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//色卡仓库存放表
		Schema::create('samplewarehouses', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('cards')->unsigned()->index();//色卡关联ID
			$table->string('no')->index();//色卡仓库位置
			$table->integer('quantity')->default('0')->unsigned();//存放数量
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
		Schema::drop('samplewarehouses');
	}

}
