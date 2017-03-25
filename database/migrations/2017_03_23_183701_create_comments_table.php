<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('comments', function (Blueprint $table) {
		    $table->increments('id');
		    $table->boolean('is_answer')->default(0);
		    $table->integer('parent_id')->default(0);
		    $table->integer('user_id')->nullable();
		    $table->integer('ip_id')->nullable();
		    $table->string('user_email', 150)->nullable();
		    $table->string('user_name', 150)->nullable();
		    $table->integer('page_id');
		    $table->boolean('is_published')->default(0);
		    $table->boolean('is_deleted', 4)->default(0);
		    $table->integer('votes_like')->default(0);
		    $table->integer('votes_dislike')->default(0);
		    $table->text('comment');
		    $table->boolean('mark')->default(0);
		    $table->timestamps();
		    $table->timestamp('published_at')->nullable();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('comments');
    }
}
