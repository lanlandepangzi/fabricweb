<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingMethodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//物流方式表
		Schema::create('shipping_methods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');//物流方式名称
			$table->text('content');//物流方式内容
			$table->tinyInteger('display')->default('0')->unsigned();//是否前台显示
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
		Schema::drop('shipping_methods');
	}

}
