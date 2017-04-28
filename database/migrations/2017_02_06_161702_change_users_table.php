<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('users', function (Blueprint $table) {
		    $table->renameColumn('name', 'login');
		    $table->tinyInteger('role')->default(3)->after('id');
		    $table->string('alias', 150)->after('role');
		    $table->boolean('is_active')->default(0)->after('email');
		    $table->boolean('is_banned')->default(0)->after('is_active');
		    $table->boolean('is_online')->default(0)->after('is_banned');
		    $table->timestamp('last_activity')->nullable()->after('is_online');
		    $table->string('avatar')->nullable()->after('last_activity');
		    $table->string('firstname', 100)->nullable()->after('avatar');
		    $table->string('lastname', 100)->nullable()->after('firstname');
		    $table->integer('points')->default(0)->after('lastname');
		    $table->string('city', 150)->nullable()->after('points');
		    $table->string('country', 150)->nullable()->after('city');
		    $table->string('car_brand', 150)->nullable()->after('country');
		    $table->string('car_model', 150)->nullable()->after('car_brand');
		    $table->string('profession', 150)->nullable()->after('car_model');
		    $table->text('description')->after('profession');
		    $table->tinyInteger('sex')->default(0)->after('description');
		    $table->timestamp('birthday')->nullable()->after('sex');
		    $table->string('activation_code');
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
		    $table->renameColumn('login', 'name');
		    $table->dropColumn('alias');
		    $table->dropColumn('role');
		    $table->dropColumn('is_active');
		    $table->dropColumn('is_banned');
		    $table->dropColumn('is_online');
		    $table->dropColumn('last_activity');
		    $table->dropColumn('avatar');
		    $table->dropColumn('firstname');
		    $table->dropColumn('lastname');
		    $table->dropColumn('city');
		    $table->dropColumn('country');
		    $table->dropColumn('points');
		    $table->dropColumn('car_brand');
		    $table->dropColumn('car_model');
		    $table->dropColumn('profession');
		    $table->dropColumn('description');
		    $table->dropColumn('sex');
		    $table->dropColumn('birthday');
		    $table->dropColumn('activation_code');
	    });
    }
}
