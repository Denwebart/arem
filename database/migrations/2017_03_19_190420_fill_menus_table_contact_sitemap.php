<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillMenusTableContactSitemap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    DB::table('menus')->insert(
		    [
			    [
				    'id' => 6,
				    'type' => \App\Models\Menu::TYPE_SYSTEM,
				    'page_id' => \App\Models\Page::ID_CONTACT_PAGE,
				    'position' => '1',
			    ],
			    [
				    'id' => 7,
				    'type' => \App\Models\Menu::TYPE_SYSTEM,
				    'page_id' => \App\Models\Page::ID_SITEMAP_PAGE,
				    'position' => '2',
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
	    DB::table('menus')->whereIn('id', [6, 7])->delete();
    }
}
