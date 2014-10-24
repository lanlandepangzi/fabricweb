<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufactureDeliveriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//生产订单发货|预录入清单
		Schema::create('manufacture_deliveries', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('no')->unsigned()->unique();//流水号
			$table->bigInteger('order')->unsigned()->index();//生产订单关联ID
			$table->integer('supplier')->unsigned()->index();//供应商关联ID
			$table->date('create_date');//发货时间
			$table->integer('item_count')->default('0')->unsigned();//匹数
			$table->integer('quantity')->default('0')->unsigned();//米数
			$table->decimal('amount')->default('0.00');//金额
			$table->string('operator');//操作人
			$table->tinyInteger('status')->default('0')->unsigned();//状态
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
		Schema::drop('manufacture_deliveries');
	}

}
