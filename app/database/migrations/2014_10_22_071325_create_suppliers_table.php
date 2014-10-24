<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//供应商表
		Schema::create('suppliers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('no')->unsigned()->unique();//供应商编号
			$table->string('name')->index();//供应商名称
			$table->string('name_pinyin')->nullable()->index();//拼音
			$table->string('type');//供应商类型 厂家 贸易商 委托加工
			$table->string('mobile')->unique();//手机
			$table->string('qq');//qq
			$table->string('wechat');//微信			
			$table->string('mail');//邮箱
			$table->string('web');//网站
			$table->string('region');//地区
			$table->string('address');//详细地址
			$table->string('info_area');//面积
			$table->string('info_address');//地址
			$table->string('info_quantity');//规模
			$table->string('info_amount');//产量
			$table->tinyInteger('audit_status')->default('0')->unsigned();//状态 0-注册，1-地区审核，2-总部审核
			$table->string('auditor_initial');//地区审核人
			$table->string('auditor_final');//总部审核人
			$table->timestamp('auditor_initial_time');//地区审核时间
			$table->timestamp('auditor_final_time');//总部审核时间
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
		Schema::drop('suppliers');
	}

}
