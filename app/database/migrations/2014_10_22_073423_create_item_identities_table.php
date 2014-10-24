<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemIdentitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//检验报告表
		Schema::create('item_identities', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('identity')->index()->unsigned();//检验报告号关联ID
			$table->text('content');//检验报告内容
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
		Schema::drop('item_identities');
	}

}
