<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//id自增表
		Schema::create('ids', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name');//使用者
			$table->string('value')->unique();//自增值
			$table->integer('used')->default('0')->unsigned();//0-未使用，1-已使用
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
		Schema::drop('ids');
	}

}
