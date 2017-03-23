<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('ips', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('ip', 20)->nullable();
		    $table->boolean('is_banned')->default(0);
		    $table->timestamp('ban_at')->nullable();
		    $table->timestamp('unban_at')->nullable();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('ips');
    }
}