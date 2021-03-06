<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeRoleDefaultValueInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('users', function (Blueprint $table) {
		    $table->dropColumn('role');
	    });
	    Schema::table('users', function (Blueprint $table) {
		    $table->tinyInteger('role')->default(0)->after('id');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('users', function (Blueprint $table) {
		    $table->dropColumn('role');
	    });
	    Schema::table('users', function (Blueprint $table) {
		    $table->tinyInteger('role')->default(3)->after('id');
	    });
    }
}
