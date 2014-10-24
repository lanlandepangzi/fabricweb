<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//客户分组表
		Schema::create('customer_groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');//会员组名
			$table->string('description');//会员组描述
			$table->text('rule');//会员组规则Json格式，例如价格以及信用相关
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
		Schema::drop('customer_groups');
	}

}
