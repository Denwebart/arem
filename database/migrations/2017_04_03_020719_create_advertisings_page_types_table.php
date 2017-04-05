<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisingsPageTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('advertisings_page_types', function (Blueprint $table) {
		    $table->integer('advertising_id');
		    $table->integer('page_type')->default(0);
		    $table->primary(['advertising_id', 'page_type']);
	    });
    }
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('advertisings_page_types');
	}
}
