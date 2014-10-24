<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufacturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//生产下单表
		Schema::create('manufactures', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('no')->unsigned()->unique();//生产订单号
			$table->integer('supplier')->unsigned()->index();//供应商关联ID
			$table->string('contract_no');//合同编号
			$table->integer('item_count')->default('0')->unsigned();//花型个数
			$table->decimal('amount')->default('0.00');//金额
			$table->integer('quantity')->default('0')->unsigned();//米数
			$table->integer('deadline')->default('0')->unsigned();//交货期限
			$table->date('create_date');//下单时间
			$table->date('delivery_date');//预计发货时间
			$table->string('requirement_inspection');//检验要求
			$table->string('requirement_length');//长度
			$table->string('requirement_package');//包装
			$table->string('requirement_organize');//组织
			$table->string('requirement_arrange');//整理
			$table->string('requirement_other');//其他要求
			$table->string('delivery_address');//收获地址
			$table->string('shipping');//物流
			$table->string('terms');//条款
			$table->string('status');//状态
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
		Schema::drop('manufactures');
	}

}
