<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

<div class="tags">
    @foreach($item->tags as $tag)
        <a href="{{ $tag->getUrl() }}">
            <span>{{ $tag->title }}</span>
            <span class="count">{{ count($tag->pages) }}</span>
        </a>
    @endforeach
</div>