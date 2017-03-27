<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillSettingsTableH1TitleSlogan extends Migration
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
			    'key' => 'H1.title',
			    'category' => \App\Models\Setting::CATEGORY_SITE,
			    'type' => \App\Models\Setting::TYPE_TEXT,
			    'title' => 'H1: заголовок',
			    'description' => 'Заголовок сайта.',
			    'value' => 'Школа авторемонта',
			    'validation_rule' => 'max:50',
		    ],
		    [
			    'key' => 'H1.slogan',
			    'category' => \App\Models\Setting::CATEGORY_SITE,
			    'type' => \App\Models\Setting::TYPE_TEXT,
			    'title' => 'H1: слоган',
			    'description' => 'Слоган сайта.',
			    'value' => 'Статьи, советы и рекомендации
			                по ремонту иобслуживанию автомобилей своими руками',
			    'validation_rule' => 'max:250',
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
			'H1.title',
			'H1.slogan',
		])->delete();
	}
}
