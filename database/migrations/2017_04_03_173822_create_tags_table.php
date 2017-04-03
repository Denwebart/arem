<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('tags', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('alias', 100);
		    $table->string('title', 100);
		    $table->string('image', 300)->nullable();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('tags');
    }
}
