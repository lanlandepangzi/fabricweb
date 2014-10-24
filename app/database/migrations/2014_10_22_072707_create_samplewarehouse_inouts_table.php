<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSamplewarehouseInoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//色卡仓库进出记录表
		Schema::create('samplewarehouse_inouts', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('cards')->unsigned()->index();//色卡关联ID
			$table->integer('quantity')->default('0')->unsigned();//数量
			$table->string('operator');//操作员
			$table->tinyinteger('action')->default('0')->unsigned();//0-进仓，1-出仓
			$table->string('memo');//备注
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
		Schema::drop('samplewarehouse_inouts');
	}

}
