<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufactureReceivePackageInspectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//拆包检验表
		Schema::create('manufacture_receive_package_inspections', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('package')->unsigned()->index();//到包关联ID
			$table->integer('supplier')->unsigned()->index();//供应商关联ID
			$table->string('no')->unique();//检验报告号
			$table->string('goods_no')->index();//花型
			$table->integer('quantity')->default('0')->unsigned();//数量
			$table->decimal('price')->default('0.00');//单价
			$table->integer('quantity_correct')->unsigned();//修正数量
			$table->string('position_recommend');//推荐存放位置
			$table->string('position_correct')->index();//实际存放位置
			$table->tinyInteger('status')->unsigned()->default('0');//状态
			$table->string('operator');//操作员
			$table->string('cylinder_no');//钢号
			$table->tinyInteger('status_stock')->unsigned()->default('0');//仓库状态 0-未入库，1-入库
			$table->bigInteger('orgdetail')->unsigned()->index();//预录入原始布匹关联ID
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
		Schema::drop('manufacture_receive_package_inspections');
	}

}
