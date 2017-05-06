<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('site_rules', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('position')->default(0);
		    $table->boolean('is_published')->default(0);
		    $table->string('title', 500)->nullable();
		    $table->string('description', 2000)->nullable();
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
	    Schema::drop('site_rules');
    }
}