<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//员工表
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();//用户名
			$table->string('password');//密码
			$table->integer('no')->unsigned()->unique();//员工编号
			$table->string('name');//姓名
			$table->string('mobile');//手机
			$table->integer('department')->unsigned()->index();//部门关联ID
			$table->text('right');//Json字段权限
			$table->tinyinteger('disable')->default('0')->unsigned();//0-正常 1-禁用
			$table->rememberToken();//忘记密码token
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
		Schema::drop('employees');
	}

}
