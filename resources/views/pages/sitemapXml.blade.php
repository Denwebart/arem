<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
 */
?>

<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="' . asset('sitemap.xsl') . '"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    @foreach($sitemapItems as $item)
        @include('parts.sitemapXmlItem')

        {{ \App\Helpers\View::getChildrenPages($item, $item->getUrl(), 1, 'xml') }}
    @endforeach

    <image>
        <url>{{ url('img/logo-full.svg') }}</url>
        @if(isset($siteSettings['H1']) && is_array($siteSettings['H1']))
            <title>
                @if(isset($siteSettings['H1']['title']) && is_object($siteSettings['H1']['title']))
                    {{ $siteSettings['H1']['title']->value }}
                @endif
            </title>
            <slogan>
                @if(isset($siteSettings['H1']['slogan']) && is_object($siteSettings['H1']['slogan']))
                    {{ $siteSettings['H1']['slogan']->value }}
                @endif
            </slogan>
        @endif
        <siteurl>{{ Config::get('settings.domain') }}</siteurl>
        <copyright>{{ Config::get('settings.startupYear') }} - {{ date('Y') }} ©</copyright>
    </image>
</urlset>