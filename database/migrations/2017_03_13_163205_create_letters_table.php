<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('letters', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->integer('ip_id')->nullable();
			$table->string('user_name', 100)->nullable();
			$table->string('user_email', 100)->nullable();
			$table->string('subject', 500)->nullable();
			$table->text('message');
			$table->timestamps();
			$table->timestamp('deleted_at')->nullable();
			$table->timestamp('read_at')->nullable();
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('letters');
	}
}
