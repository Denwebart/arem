/**
 * Theme: Adminox Admin Template
 * Author: Coderthemes
 * Email: coderthemes@gmail.com
 * File Uploads
 */

$(document).ready(function () {
    "use-strict"
    $("#filer_input2").filer({
        limit: 3,
        maxSize: 3,
        extensions: ["jpg", "jpeg", "png", "gif", "psd"],
        changeInput: !0,
        showThumbs: !0,
        addMore: !0
    }), $("#filer_input1").filer({
        limit: null,
        maxSize: null,
        extensions: null,
        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag & Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn btn btn-custom waves-effect waves-light">Browse Files</a></div></div>',
        showThumbs: !0,
        theme: "dragdropbox",
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
            item: '<li class="jFiler-item">                        <div class="jFiler-item-container">                            <div class="jFiler-item-inner">                                <div class="jFiler-item-thumb">                                    <div class="jFiler-item-status"></div>                                    <div class="jFiler-item-info">                                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>                                        <span class="jFiler-item-others">{{fi-size2}}</span>                                    </div>                                    {{fi-image}}                                </div>                                <div class="jFiler-item-assets jFiler-row">                                    <ul class="list-inline pull-left">                                        <li>{{fi-progressBar}}</li>                                    </ul>                                    <ul class="list-inline pull-right">                                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>                                    </ul>                                </div>                            </div>                        </div>                    </li>',
            itemAppend: '<li class="jFiler-item">                            <div class="jFiler-item-container">                                <div class="jFiler-item-inner">                                    <div class="jFiler-item-thumb">                                        <div class="jFiler-item-status"></div>                                        <div class="jFiler-item-info">                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>                                            <span class="jFiler-item-others">{{fi-size2}}</span>                                        </div>                                        {{fi-image}}                                    </div>                                    <div class="jFiler-item-assets jFiler-row">                                        <ul class="list-inline pull-left">                                            <li><span class="jFiler-item-others">{{fi-icon}}</span></li>                                        </ul>                                        <ul class="list-inline pull-right">                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>                                        </ul>                                    </div>                                </div>                            </div>                        </li>',
            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: !1,
            removeConfirmation: !0,
            _selectors: {
                list: ".jFiler-items-list",
                item: ".jFiler-item",
                progressBar: ".bar",
                remove: ".jFiler-item-trash-action"
            }
        },
        dragDrop: {dragEnter: null, dragLeave: null, drop: null},
        uploadFile: {
            url: "../plugins/jquery.filer/php/upload.php",
            data: null,
            type: "POST",
            enctype: "multipart/form-data",
            beforeSend: function () {
            },
            success: function (e, i) {
                var l = i.find(".jFiler-jProgressBar").parent()
                i.find(".jFiler-jProgressBar").fadeOut("slow", function () {
                    $('<div class="jFiler-item-others text-success"><i class="icon-jfi-check-circle"></i> Success</div>').hide().appendTo(l).fadeIn("slow")
                })
            },
            error: function (e) {
                var i = e.find(".jFiler-jProgressBar").parent()
                e.find(".jFiler-jProgressBar").fadeOut("slow", function () {
                    $('<div class="jFiler-item-others text-error"><i class="icon-jfi-minus-circle"></i> Error</div>').hide().appendTo(i).fadeIn("slow")
                })
            },
            statusCode: null,
            onProgress: null,
            onComplete: null
        },
        files: [{name: "1.jpg", size: 145, type: "image/jpg", file: "assets/images/small/img-1.jpg"}, {
            name: "2.jpg",
            size: 145,
            type: "image/jpg",
            file: "assets/images/small/img-2.jpg"
        }],
        addMore: !1,
        clipBoardPaste: !0,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: null,
        onSelect: null,
        afterShow: null,
        onRemove: function (e, i, l, s, a, r, t) {
            var i = i.name
            $.post("../plugins/jquery.filer/php/remove_file.php", {file: i})
        },
        onEmpty: null,
        options: null,
        captions: {
            button: "Choose Files",
            feedback: "Choose files To Upload",
            feedback2: "files were chosen",
            drop: "Drop file here to Upload",
            removeConfirmation: "Are you sure you want to remove this file?",
            errors: {
                filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                filesType: "Only Images are allowed to be uploaded.",
                filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
            }
        }
    })
})
