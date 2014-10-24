<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufactureDeliveryPackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//生产订单|预录入打包
		Schema::create('manufacture_delivery_packages', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('no')->index();//包号
			$table->integer('supplier')->unsigned()->index();//供应商关联ID
			$table->date('create_date');//发包日期
			$table->bigInteger('delivery')->unsigned()->index();//发货生产单关联ID
			$table->integer('item_count')->default('0')->unsigned();//匹数
			$table->integer('quantity')->default('0')->unsigned();//米数
			$table->decimal('amount')->default('0.00');//金额
			$table->tinyInteger('status')->default('0')->unsigned();//状态
			$table->string('operator');//操作人
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
		Schema::drop('manufacture_delivery_packages');
	}

}
