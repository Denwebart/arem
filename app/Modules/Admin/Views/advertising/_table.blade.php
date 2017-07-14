<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@if(count($advertisings))
    <table class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" cellspacing="0" width="100%" id="datatable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Тип</th>
            <th>Изображение</th>
            <th>Заголовок</th>
            <th>URL</th>
            <th>Статус публикации</th>
            <th>Мета-теги</th>
            <th class="hidden-sm">Действия</th>
        </tr>
        </thead>

        <tbody>
        @foreach($advertisings as $advertising)
            <tr class="item" data-item-id="{{ $advertising->id }}">
                <td>
                    <b>{{ $advertising->id }}</b>
                </td>

                <td>
                    <i class="fa @if($advertising->type == \App\Models\Advertising::TYPE_ADVERTISING) fa-money @else fa-cog @endif" title="{{ \App\Models\Advertising::$types[\App\Models\Advertising::TYPE_ADVERTISING] }}" data-toggle="tooltip"></i>
                </td>

                <td>

                </td>

                <td>
                    {{ $advertising->title }}
                </td>

                <td>
                    <a href="{{ $advertising->getUrl() }}" target="_blank" rel="nofollow noopener">{{ $advertising->getUrl(true) }}</a>
                </td>

                <td class="published-status">
                    <span class="label @if($advertising->is_active) label-success @else label-muted @endif">
                        {{ \App\Models\Advertising::$is_active[$advertising->is_active] }}
                    </span>
                </td>

                <td class="meta-data">
                    @if($advertising->meta_title && $advertising->meta_desc && $advertising->meta_key)
                        <span class="label label-success">Заполнены</span>
                    @elseif(!$advertising->meta_title && !$advertising->meta_desc && !$advertising->meta_key)
                        <span class="label @if($advertising->is_published) label-danger @else label-muted @endif">Не заполнены</span>
                    @else
                        @if(!$advertising->meta_title) <span class="label @if($advertising->is_published) label-danger @else label-muted @endif">Нет тега Title</span>@endif
                        @if(!$advertising->meta_desc) <span class="label @if($advertising->is_published) label-danger @else label-muted @endif">Нет тега Description</span>@endif
                        @if(!$advertising->meta_key) <span class="label @if($advertising->is_published) label-warning @else label-muted @endif">Нет тега Keywords</span>@endif
                    @endif
                </td>

                <td>
                    <div class="btn-group dropdown">
                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="{{ route('admin.advertising.edit', ['id' => $advertising->id]) }}"><i class="mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle"></i>Редактировать</a></li>
                            @if(!$advertising->isMain())
                                <li>
                                    <a href="#" class="button-change-published-status" data-item-id="{{ $advertising->id }}" data-is-published="{{ $advertising->is_published }}">
                                        @if($advertising->is_published)
                                            <i class="mdi mdi-eye-off m-r-10 text-muted font-18 vertical-middle"></i><span>Снять с публикации</span>
                                        @else
                                            <i class="mdi mdi-eye m-r-10 text-muted font-18 vertical-middle"></i><span>Опубликовать</span>
                                        @endif
                                    </a>
                                </li>
                            @endif
                            @if($advertising->canBeDeleted())
                                <li><a href="#" class="button-delete" data-item-id="{{ $advertising->id }}" data-item-title="{{ $advertising->getTitle() }}" data-count-children="{{ count($advertising->children) }}" data-count-menus="{{ count($advertising->menus) }}"><i class="mdi mdi-delete m-r-10 text-muted font-18 vertical-middle"></i>Удалить</a></li>
                            @endif
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <div class="background-icon text-center">
        <p>Страниц нет</p>
        <i class="fa fa-file-text-o"></i>
    </div>
@endif