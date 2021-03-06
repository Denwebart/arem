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
                <span>{{ $item->page->getTitle() }}</span>
                @if(count($item->children))
                    <i class="fa fa-angle-down open-dropdown"></i>
                @endif
            </a>
            @if(count($item->children))
                <ul>
                    @foreach($item->children as $childItem)
                        @if($childItem->page)
                            <li @if(\Request::is($childItem->page->getUrl()) || \Request::url() == url($childItem->page->alias)) class="active" @endif>
                                <a href="{{ $childItem->page->getUrl() }}">
                                    {{ $childItem->page->getTitle() }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endif
        </li>
    @endif
@endforeach