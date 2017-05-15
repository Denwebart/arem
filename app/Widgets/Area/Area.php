<?php
/**
 * Class Area
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Widgets\Area;

use App\Models\Advertising;
use Illuminate\Support\Facades\Auth;

class Area
{
	private $advertising = [];
	
	public function __construct($pageType = 0) {
		
		if(Auth::check()) {
			if(Auth::user()->isAdmin()) {
				$advertising = Advertising::orderBy('position', 'ASC')
					->whereHas('pageTypes', function($query) use($pageType) {
						$query->where('page_type', '=', $pageType);
					})
					->get(['id', 'type', 'area', 'position', 'title', 'is_show_title', 'access', 'code', 'limit', 'description', 'is_active']);
			} else {
				$advertising = Advertising::whereIsActive(1)
					->whereHas('pageTypes', function($query) use($pageType) {
						$query->where('page_type', '=', $pageType);
					})
					->whereIn('access', [Advertising::ACCESS_FOR_ALL, Advertising::ACCESS_FOR_REGISTERED])
					->orderBy('position', 'ASC')
					->get(['id', 'type', 'area', 'position', 'title', 'is_show_title', 'access', 'code', 'limit', 'description', 'is_active']);
			}
		} else {
			$advertising = Advertising::whereIsActive(1)
				->whereHas('pageTypes', function($query) use($pageType) {
					$query->where('page_type', '=', $pageType);
				})
				->whereIn('access', [Advertising::ACCESS_FOR_ALL, Advertising::ACCESS_FOR_GUEST])
				->orderBy('position', 'ASC')
				->get(['id', 'type', 'area', 'position', 'title', 'is_show_title', 'access', 'code', 'limit', 'description', 'is_active']);
		}
		
		foreach($advertising as $item) {
			$this->advertising[$item->area][] = $item;
		}
	}
	
	public function leftSidebar()
	{
		$area = Advertising::AREA_LEFT_SIDEBAR;
		$advertising = isset($this->advertising[$area])
			? $this->advertising[$area] : [];
		
		return (string) view('widget.area::areas.sidebar', compact('advertising', 'area'))->render();
	}
	
	public function rightSidebar()
	{
		$area = Advertising::AREA_RIGHT_SIDEBAR;
		$advertising = isset($this->advertising[$area])
			? $this->advertising[$area] : [];
		
		return (string) view('widget.area::areas.sidebar', compact('advertising', 'area'))->render();
	}
	
	public function contentTop()
	{
		$area = Advertising::AREA_CONTENT_TOP;
		$advertising = isset($this->advertising[$area])
			? $this->advertising[$area] : [];
		
		return (string) view('widget.area::areas.content', compact('advertising', 'area'))->render();
	}
	
	public function contentMiddle()
	{
		$area = Advertising::AREA_CONTENT_MIDDLE;
		$advertising = isset($this->advertising[$area])
			? $this->advertising[$area] : [];
		
		return (string) view('widget.area::areas.content', compact('advertising', 'area'))->render();
	}
	
	public function contentBottom()
	{
		$area = Advertising::AREA_CONTENT_BOTTOM;
		$advertising = isset($this->advertising[$area])
			? $this->advertising[$area] : [];
		
		return (string) view('widget.area::areas.content', compact('advertising', 'area'))->render();
	}
	
	public function siteBottom()
	{
		$area = Advertising::AREA_SITE_BOTTOM;
		$advertising = isset($this->advertising[$area])
			? $this->advertising[$area] : [];
		
		return (string) view('widget.area::areas.site', compact('advertising', 'area'))->render();
	}
	
}