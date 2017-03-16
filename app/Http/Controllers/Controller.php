<?php

namespace App\Http\Controllers;

use App\Widgets\Menu\Menu;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Widgets\HeaderPanel\HeaderPanel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct()
    {
    	\View::share('headerPanel', new HeaderPanel());
    	\View::share('menu', new Menu());
    }
}
