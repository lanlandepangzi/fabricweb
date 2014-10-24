<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//部门表
		Schema::create('departments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('no')->unsigned()->unique();//部门编号
			$table->string('name');//部门名称
			$table->integer('parent')->default('0')->unsigned();//父ID
			$table->text('right');//部门权限
			$table->integer('sort')->default('0')->unsigned();//排序值
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
		Schema::drop('departments');
	}

}
