<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	if(!\App\Models\User::find(1)) {
		    DB::table('users')->insert(
			    [
				    [
					    'id' => 1,
					    'role' => \App\Models\User::ROLE_ADMIN,
					    'alias' => \App\Helpers\Translit::make('Admin'),
					    'login' => 'Admin',
					    'email' => 'admin@email.com',
					    'password' => bcrypt('admin'),
				    ],
			    ]);
	    }
    }
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$user = \App\Models\User::find(1);
		if($user && $user->login == 'Admin') {
			DB::table('users')->whereId(1)->delete();
		}
	}
}