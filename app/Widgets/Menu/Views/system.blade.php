<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@foreach($menuItems as $item)
    @if($item->page)
        <li @if(\Request::is($item->page->getUrl()) || \Request::url() == url($item->page->alias)) class="active" @endif>
            <a href="{{ $item->page->getUrl() }}">
                @if($item->page->id == \App\Models\Page::ID_CONTACT_PAGE)
                    <i class="fa fa-envelope"></i>{{ $item->page->getTitle() }}
                @elseif($item->page->id == \App\Models\Page::ID_SITEMAP_PAGE)
                    <i class="fa fa-sitemap"></i>{{ $item->page->getTitle() }}
                @else
                    {{ $item->page->getTitle() }}
                @endif
            </a>
        </li>
    @endif
@endforeach