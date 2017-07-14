<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

{!! csrf_field() !!}

{!! Form::hidden('backUrl', $backUrl) !!}
{!! Form::hidden('returnBack', 1, ['id' => 'returnBack']) !!}
{!! Form::hidden('deleteImage', 0, ['id' => 'deleteImage']) !!}

<!-- TinyMCE image -->
{{ Form::file('editorImage', ['style' => 'display:none', 'id' => 'editorImage']) }}
{{ Form::hidden('tempPath', $comment->getTempPath(), ['id' => 'tempPath']) }}

<div class="row">
    <div class="col-lg-6 col-sm-12 col-xs-12 m-b-15">


    </div><!-- end col -->

    <div class="col-lg-6 col-sm-12 col-xs-12 m-b-15">
        <div class="form-group @if($errors->has('is_published')) has-error @endif">
            <div class="col-md-2">
            </div>
            <div class="col-md-4 switchery-demo">
                {!! Form::hidden('is_published', 0) !!}
                {!! Form::checkbox('is_published', 1, $comment->is_published, ['id' => 'is_published', 'data-plugin' => 'switchery', 'data-color' => '#3bafda', 'data-size' => 'small']) !!}
                {!! Form::label('is_published', \App\Models\Comment::$is_published[\App\Models\Comment::PUBLISHED], ['class' => 'control-label m-l-5']) !!}
            </div>
            <div class="col-md-6">
                <span class="help-block">
                    <small>
                        @if(!$comment->published_at)
                            (сохраните, чтоб опубликовать)
                        @else
                            {{ \App\Helpers\Date::format($comment->published_at, true, true) }}
                        @endif
                    </small>
                </span>

                @if($errors->has('is_published'))
                    <span class="error help-block text-danger font-12">
                        <i class="fa fa-times-circle"></i>
                        <strong>{{ $errors->first('is_published') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group @if($errors->has('content')) has-error @endif">
            <div class="col-md-12">
                {!! Form::label('comment', 'Комментарий', ['class' => 'control-label m-b-5']) !!}

                {!! Form::textarea('comment', $comment->comment, ['id' => 'comment', 'class' => 'form-control editor', 'rows' => 10]) !!}

                @if($errors->has('comment'))
                    <span class="error help-block text-danger font-12">
                        <i class="fa fa-times-circle"></i>
                        <strong>{{ $errors->first('comment') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="text-right m-b-0">
            <button type="button" class="btn btn-custom waves-effect waves-light button-save-exit">
                <i class="fa fa-arrow-left"></i>
                <span>Сохранить и выйти</span>
            </button>
            <button type="button" class="btn btn-custom waves-effect waves-light button-save">
                <i class="fa fa-check"></i>
                <span class="hidden-sm">Сохранить</span>
            </button>
            <a href="{{ $backUrl }}" class="btn btn-default waves-effect waves-light button-cancel">
                <i class="fa fa-close"></i>
                <span class="hidden-md hidden-sm">Отмена</span>
            </a>
        </div>
    </div>

</div><!-- end row -->

@push('styles')
<!-- Switchery Checkbox -->
<link href="{{ asset('backend/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
<!-- Bootstrap Select -->
<link href="{{ asset('backend/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
<!-- Date and Time Pickers -->
<link href="{{ asset('backend/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<!-- File Upload - Dropify -->
<link href="{{ asset('backend/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
<!-- Bootstrap MaxLength -->
<script src="{{ asset('backend/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
<!-- Switchery Checkbox -->
<script src="{{ asset('backend/plugins/switchery/switchery.min.js') }}"></script>
<!-- Bootstrap Select -->
<script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
<!-- Date and Time Pickers -->
<script src="{{ asset('backend/plugins/timepicker/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('backend/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<!-- File Upload - Dropify -->
<script src="{{ asset('backend/plugins/dropify/js/dropify.min.js') }}"></script>
<!-- Wysiwig Editor - TinyMCE -->
<script src="{{ asset('backend/plugins/tinymce/tinymce.min.js') }}"></script>
@endpush

@push('scriptsBottom')
<script type="text/javascript">

    // Buttons
    $(document).on('click', '.button-save-exit', function() {
        $("#returnBack").val('1');
        $("#main-form").submit();
    });
    $(document).on('click', '.button-save', function() {
        $("#returnBack").val('0');
        $("#main-form").submit();
    });

    // Bootstrap MaxLength
    $(".maxlength").maxlength({
        alwaysShow: true
    });

    // Date and Time Pickers
    $(".datepicker").datepicker({
        autoClose: true
    });
    $(".timepicker").timepicker({
        defaultTime: '10:00',
        showMeridian: false
    });
    $(".datetimepicker").datetimepicker();

    // Image Uploader
    var drEvent = $('.dropify').dropify(dropifyOptions);

    // Image delete
    drEvent.on('dropify.afterClear', function(event, element){
        $('#deleteImage').val(1);
    });

</script>
@endpush

@push('scriptsBottom')
    @include('admin::tinymce-init', ['imagePath' => $comment->getImageEditorPath()])

    <script type="text/javascript">
        // Clear input field
        $('.button-clear').on('click', function() {
            $(this).parent().find('input.inputmask').val('');
        });
    </script>
@endpush