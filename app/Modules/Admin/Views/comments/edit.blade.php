<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@extends('admin::layout')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Редактирование @if(!$comment->is_answer) комментария @else ответа @endif</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="{{ route('admin.index') }}">Главная</a>
                </li>
                <li>
                    <a href="{{ route('admin.comments.index') }}">Комментарии</a>
                </li>
                <li class="active">
                    Редактирование @if(!$comment->is_answer) комментария @else ответа @endif
                </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-sm-6 col-md-6 col-xs-12 hidden-xs">
        <p class="text-muted font-13 m-b-0">
            Автор:
            @if($comment->user)
                <a href="{{ route('admin.users.show', ['id' => $comment->user->id]) }}">
                    <img src="{{ $comment->user->getAvatarUrl() }}" class="img-circle m-l-5" width="18px" alt="{{ $comment->user->login }}">
                    <span class="m-l-5">{{ $comment->user->login }}</span>
                </a>
            @else
                <span class="m-l-5">
                    {{ $comment->user_name }}
                    ({{ $comment->user_email }})
                </span>
            @endif
        </p>
        <p class="text-muted font-13 m-b-0">
            @if($comment->is_published)
                Опубликован: {{ \App\Helpers\Date::format($comment->published_at, true) }}.
            @endif
            Последнее обновение:
            @if($comment->updated_at)
                {{ \App\Helpers\Date::format($comment->updated_at, true) }}
                @if(\App\Helpers\Date::format($comment->updated_at, true) != \App\Helpers\Date::getRelative($comment->updated_at, true))
                    ({{ \App\Helpers\Date::getRelative($comment->updated_at, true) }})
                @endif
            @else
                комментарий не обновлялся.
            @endif
        </p>
    </div>
    <div class="col-sm-6 col-md-6 col-xs-12">
        <div class="button pull-right">
            <button type="button" class="btn btn-custom waves-effect waves-light m-b-10 button-save-exit">
                <i class="fa fa-arrow-left"></i>
                <span>Сохранить и выйти</span>
            </button>
            <button type="button" class="btn btn-custom waves-effect waves-light m-b-10 button-save">
                <i class="fa fa-check"></i>
                <span class="hidden-sm">Сохранить</span>
            </button>
            <a href="{{ $backUrl }}" class="btn btn-default waves-effect waves-light m-b-10 button-cancel">
                <i class="fa fa-close"></i>
                <span class="hidden-md hidden-sm">Отмена</span>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            {!! Form::model($comment, ['route' => ['admin.comments.update', $comment->id], 'class' => 'form-horizontal', 'id' => 'main-form', 'files' => true]) !!}
            {!! Form::hidden('_method', 'PUT') !!}

            @include('admin::comments._form')

            {!! Form::close() !!}
        </div>
    </div><!-- end col -->
</div>
<!-- end row -->

@endsection