<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    DB::table('pages')->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8])->delete();
	    
	    DB::table('pages')->insert(
		    [
			    [
			    	'id' => 1,
				    'alias' => '/',
				    'user_id' => '1',
				    'type' => \App\Models\Page::TYPE_SYSTEM_PAGE,
				    'title' => 'Главная страница',
				    'menu_title' => 'Главная',
				    'created_at' => \Carbon\Carbon::now(),
				    'published_at' => \Carbon\Carbon::now(),
			    ],
			    [
				    'id' => 2,
				    'alias' => \App\Helpers\Translit::make('Контакты'),
				    'user_id' => '1',
				    'type' => \App\Models\Page::TYPE_SYSTEM_PAGE,
				    'title' => 'Контакты',
				    'menu_title' => 'Контакты',
				    'created_at' => \Carbon\Carbon::now(),
				    'published_at' => \Carbon\Carbon::now(),
			    ],
			    [
				    'id' => 3,
				    'alias' => \App\Helpers\Translit::make('Карта сайта'),
				    'user_id' => '1',
				    'type' => \App\Models\Page::TYPE_SYSTEM_PAGE,
				    'title' => 'Карта сайта',
				    'menu_title' => 'Карта сайта',
				    'created_at' => \Carbon\Carbon::now(),
				    'published_at' => \Carbon\Carbon::now(),
			    ],
			    [
				    'id' => 4,
				    'alias' => \App\Helpers\Translit::make('Награды'),
				    'user_id' => '1',
				    'type' => \App\Models\Page::TYPE_SYSTEM_PAGE,
				    'title' => 'Награды',
				    'menu_title' => 'Награды и призы',
				    'created_at' => \Carbon\Carbon::now(),
				    'published_at' => \Carbon\Carbon::now(),
			    ],
			    [
				    'id' => 5,
				    'alias' => \App\Helpers\Translit::make('Правила сайта'),
				    'user_id' => '1',
				    'type' => \App\Models\Page::TYPE_SYSTEM_PAGE,
				    'title' => 'Правила сайта',
				    'menu_title' => 'Правила сайта',
				    'created_at' => \Carbon\Carbon::now(),
				    'published_at' => \Carbon\Carbon::now(),
			    ],
			    [
				    'id' => 6,
				    'alias' => 'tag',
				    'user_id' => '1',
				    'type' => \App\Models\Page::TYPE_SYSTEM_PAGE,
				    'title' => 'Теги',
				    'menu_title' => 'Теги',
				    'created_at' => \Carbon\Carbon::now(),
				    'published_at' => \Carbon\Carbon::now(),
			    ],
			    [
				    'id' => 7,
				    'alias' => \App\Helpers\Translit::make('Вопрос-ответ'),
				    'user_id' => '1',
				    'type' => \App\Models\Page::TYPE_QUESTIONS,
				    'title' => 'Вопрос-ответ',
				    'menu_title' => 'Вопрос-ответ',
				    'created_at' => \Carbon\Carbon::now(),
				    'published_at' => \Carbon\Carbon::now(),
			    ],
			    [
				    'id' => 8,
				    'alias' => \App\Helpers\Translit::make('Гараж'),
				    'user_id' => '1',
				    'type' => \App\Models\Page::TYPE_JOURNAL,
				    'title' => 'Гараж',
				    'menu_title' => 'Гараж',
				    'created_at' => \Carbon\Carbon::now(),
				    'published_at' => \Carbon\Carbon::now(),
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
		DB::table('pages')->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8])->delete();
	}
}