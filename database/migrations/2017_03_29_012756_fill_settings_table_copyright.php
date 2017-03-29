<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillSettingsTableCopyright extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    DB::table('settings')->insert([
		    [
			    'key' => 'copyright',
			    'category' => \App\Models\Setting::CATEGORY_SITE,
			    'type' => \App\Models\Setting::TYPE_TEXT,
			    'title' => 'Копирайт',
			    'description' => 'Текст перед копирайтом.',
			    'value' => 'При использовании авторских статей ссылка на сайт обязательна.',
			    'validation_rule' => 'max:255',
		    ],
	    ]);
    }
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('settings')->whereIn('key', [
			'copyright',
		])->delete();
	}
}
