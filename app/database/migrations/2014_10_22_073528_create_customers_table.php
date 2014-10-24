<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//客户表
		Schema::create('customers', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name')->index();//会员姓名
			$table->integer('no')->unsigned()->index();//会员号
			$table->integer('group')->unsigned()->index();//会员分组
			$table->tinyInteger('type')->default('0')->unsigned();//会员类型 0-门市 1-网站
			$table->string('mobile')->index();//手机
			$table->string('qq');//qq
			$table->string('wechat');//微信
			$table->string('mail');//邮件
			$table->tinyInteger('sex')->default('0')->unsigned();//性别 0-未知 1-男 2-女
			$table->date('birthday');//生日
			$table->integer('province')->default('0')->unsigned();//省份
			$table->integer('city')->default('0')->unsigned();//城市
			$table->integer('district')->default('0')->unsigned();//地区
			$table->string('street');//街道
			$table->string('address');//详细地址，冗余字段必填
			$table->string('postcode');//邮编
			$table->text('business');//买家行业分布调查Json格式
			$table->integer('point')->unsigned()->default('0');//积分
			$table->integer('credit')->unsigned()->default('0');//信用额度
			$table->bigInteger('web')->index()->unsigned();//网站登录账号关联ID
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
		Schema::drop('customers');
	}

}
