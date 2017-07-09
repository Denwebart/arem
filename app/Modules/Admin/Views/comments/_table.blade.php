<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@if(count($comments))
    <table class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" cellspacing="0" width="100%" id="datatable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Автор</th>
            <th>Страница</th>
            <th>Комментарий</th>
            <th>Статус публикации</th>
            <th>Создан</th>
            <th class="hidden-sm">Действия</th>
        </tr>
        </thead>

        <tbody>
        @foreach($comments as $comment)
            <tr class="item" data-item-id="{{ $comment->id }}">
                <td>
                    <b>{{ $comment->id }}</b>
                </td>

                <td>
                    @if($comment->user)
                        <img src="{{ $comment->user->getAvatarUrl() }}" alt="{{ $comment->user->login }}" title="{{ $comment->user->login }}">
                        <span>{{ $comment->user->login }}</span>
                    @else
                        <span>{{ $comment->user_name }} ({{ $comment->user_email }})</span>
                    @endif
                </td>

                <td>
                    @if($comment->page)
                        <a href="{{ $comment->page->getUrl() }}" target="_blank" rel="nofollow noopener">
                            {{ $comment->page->getTitle() }}
                        </a>
                    @endif
                </td>

                <td>
                    {!! $comment->comment !!}
                </td>

                <td class="published-status">
                    <span class="label @if($comment->is_published) label-success @else label-muted @endif">
                        {{ \App\Models\Comment::$is_published[$comment->is_published] }}
                    </span>
                </td>

                <td>
                   {{ \App\Helpers\Date::format($comment->created_at) }}
                </td>

                <td>
                    <div class="btn-group dropdown">
                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="{{ route('admin.comments.edit', ['id' => $comment->id]) }}"><i class="mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle"></i>Редактировать</a></li>
                            <li>
                                <a href="#" class="button-change-published-status" data-item-id="{{ $comment->id }}" data-is-published="{{ $comment->is_published }}">
                                    @if($comment->is_published)
                                        <i class="mdi mdi-eye-off m-r-10 text-muted font-18 vertical-middle"></i><span>Снять с публикации</span>
                                    @else
                                        <i class="mdi mdi-eye m-r-10 text-muted font-18 vertical-middle"></i><span>Опубликовать</span>
                                    @endif
                                </a>
                            </li>
                            <li><a href="#" class="button-delete" data-item-id="{{ $comment->id }}" data-item-title="{{ $comment->user ? $comment->user->login : ($comment->user_name . '(' . $comment->user_email . ')') }}" data-page-title="{{ $comment->page ? $comment->page->getTitle() : '<i class="text-danger">страница удалена</i>' }}" data-count-children="{{ count($comment->children) }}"><i class="mdi mdi-delete m-r-10 text-muted font-18 vertical-middle"></i>Удалить</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <div class="background-icon text-center">
        <p>Комментариев нет</p>
        <i class="fa fa-comments-o"></i>
    </div>
@endif