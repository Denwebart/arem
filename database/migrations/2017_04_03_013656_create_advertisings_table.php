<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('advertisings', function (Blueprint $table) {
		    $table->increments('id');
		    $table->boolean('type')->default(1);
		    $table->tinyInteger('area');
		    $table->integer('position');
		    $table->string('title', 100)->nullable();
		    $table->boolean('is_show_title')->default(0);
		    $table->boolean('access')->default(1);
		    $table->text('code');
		    $table->tinyInteger('limit')->default(5);
		    $table->string('description', 1000)->nullable();
		    $table->boolean('is_active')->default(0);
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
		Schema::dropIfExists('advertisings');
	}
}
