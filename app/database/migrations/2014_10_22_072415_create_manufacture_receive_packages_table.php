<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufactureReceivePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//抄包|收货表
		Schema::create('manufacture_receive_packages', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order')->unsigned()->index();//生产订单关联ID
			$table->bigInteger('delivery')->unsigned()->index();//生产预录入发货单关联ID
			$table->bigInteger('orgpackage')->unsigned()->index();//预录入原始包关联ID
			$table->integer('supplier')->unsigned()->index();//供应商关联ID
			$table->integer('item_count')->default('0')->unsigned();//匹数
			$table->integer('quantity')->default('0')->unsigned();//米数
			$table->decimal('amount')->default('0.00');//金额
			$table->tinyInteger('status')->default('0')->unsigned();//状态
			$table->string('operator');//操作员
			$table->date('receive_date');//收包日期
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
		Schema::drop('manufacture_receive_packages');
	}

}
