<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('awards', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('key', 50)->nullable();
		    $table->string('alias', 100);
		    $table->string('title', 100);
		    $table->string('image', 100)->nullable();
		    $table->text('description');
		    $table->string('meta_title', 600)->nullable();
		    $table->string('meta_desc', 1500)->nullable();
		    $table->string('meta_key', 1500)->nullable();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('awards');
    }
}
