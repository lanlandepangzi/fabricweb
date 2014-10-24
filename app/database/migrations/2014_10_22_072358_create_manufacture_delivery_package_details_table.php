<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufactureDeliveryPackageDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//生产订单预录入明细
		Schema::create('manufacture_delivery_package_details', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('goods_no')->index();//型号|花型
			$table->integer('quantity')->unsigned()->defalut('0');//数量
			$table->decimal('price')->default('0.00');//价格
			$table->integer('supplier')->unsigned()->index();//供应商关联ID
			$table->bigInteger('package')->unsigned()->index();//打包关联ID
			$table->tinyInteger('status')->default('0')->unsigned();//状态
			$table->string('cylinder_no');//钢号
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
		Schema::drop('manufacture_delivery_package_details');
	}

}
