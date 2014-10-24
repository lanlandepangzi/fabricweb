<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerWebusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//网站用户登录表
		Schema::create('customer_webusers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username');//网站登录用户名
			$table->string('password');//网站登陆密码
			$table->string('login_ip');//登陆IP，最后一次
			$table->timestamp('login_time');//登陆时间，最后一次
			$table->integer('login_times')->unsigned();//登陆次数
			$table->rememberToken();//忘记密码token
			$table->string('actived_code');//激活码  手机或邮箱
			$table->tinyInteger('actived')->unsigned()->default('0');//激活状态
			$table->tinyInteger('locked')->unsigned()->default('0');//禁止账号登录
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
		Schema::drop('customer_webusers');
	}

}
