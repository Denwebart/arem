<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('settings', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('key', 100)->unique();
		    $table->tinyInteger('category')->default(\App\Models\Setting::CATEGORY_SITE);
		    $table->boolean('type');
		    $table->string('title', 100);
		    $table->string('description', 500)->nullable();
		    $table->text('value')->nullable();
		    $table->boolean('is_active')->default(\App\Models\Setting::ACTIVE);
		    $table->string('validation_rule')->nullable();
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
	    Schema::dropIfExists('settings');
    }
}
