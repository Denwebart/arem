<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('messages', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('user_id_sender');
		    $table->integer('user_id_recipient');
		    $table->string('message', 10000);
		    $table->timestamps();
		    $table->timestamp('read_at')->nullable();
		    $table->timestamp('deleted_sender')->nullable();
		    $table->timestamp('deleted_recipient')->nullable();
	    });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('messages');
    }
}
