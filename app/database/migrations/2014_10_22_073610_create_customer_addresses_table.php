<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//客户收获地址表
		Schema::create('customer_addresses', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('customer')->index()->unsigned();//客户关联ID
			$table->string('name');//联系人
			$table->string('mobile');//手机号码
			$table->integer('province')->unsigned()->default('0');//省份
			$table->integer('city')->unsigned()->default('0');//城市
			$table->integer('district')->unsigned()->default('0');//地区
			$table->string('street');//街道
			$table->string('address');//详细地址，必填，冗余字段
			$table->string('postcode');//邮编
			$table->tinyInteger('default')->unsigned()->default('0');//选为默认地址
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
		Schema::drop('customer_addresses');
	}

}
