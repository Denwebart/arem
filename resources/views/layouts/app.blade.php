<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">

    <title>Главная страница - Avtorem.info</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">

    <meta name="google-site-verification" content="JoYRWEyA6SKbzhodnLG5xHRb_OtxQ_k1goEh4EnP_7k">
    <!-- Template Basic Images End -->

    <!-- Bootstrap (latest) Grid Styles Only -->
    <style>html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role="button"]{cursor:pointer}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1600px}}.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.row{margin-left:-15px;margin-right:-15px}.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right !important}.pull-left{float:left !important}.hide{display:none !important}.show{display:block !important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none !important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none !important}.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none !important}@media (max-width:767px){.visible-xs{display:block !important}table.visible-xs{display:table !important}tr.visible-xs{display:table-row !important}th.visible-xs,td.visible-xs{display:table-cell !important}}@media (max-width:767px){.visible-xs-block{display:block !important}}@media (max-width:767px){.visible-xs-inline{display:inline !important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block !important}table.visible-sm{display:table !important}tr.visible-sm{display:table-row !important}th.visible-sm,td.visible-sm{display:table-cell !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block !important}table.visible-md{display:table !important}tr.visible-md{display:table-row !important}th.visible-md,td.visible-md{display:table-cell !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block !important}}@media (min-width:1200px){.visible-lg{display:block !important}table.visible-lg{display:table !important}tr.visible-lg{display:table-row !important}th.visible-lg,td.visible-lg{display:table-cell !important}}@media (min-width:1200px){.visible-lg-block{display:block !important}}@media (min-width:1200px){.visible-lg-inline{display:inline !important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block !important}}@media (max-width:767px){.hidden-xs{display:none !important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none !important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none !important}}@media (min-width:1200px){.hidden-lg{display:none !important}}.visible-print{display:none !important}@media print{.visible-print{display:block !important}table.visible-print{display:table !important}tr.visible-print{display:table-row !important}th.visible-print,td.visible-print{display:table-cell !important}}.visible-print-block{display:none !important}@media print{.visible-print-block{display:block !important}}.visible-print-inline{display:none !important}@media print{.visible-print-inline{display:inline !important}}.visible-print-inline-block{display:none !important}@media print{.visible-print-inline-block{display:inline-block !important}}@media print{.hidden-print{display:none !important}}</style>

    <!-- Header CSS (first screen styles from header.min.css) - inserted in the build of the project -->
    <style>#panel,body,html{height:100%}.align-center,.button{text-align:center}.menu a,body{font-weight:400}.table-block .fixed-block .buttons,body{min-width:320px}.button,.delimiter .link>a,.select-list li span,.without-enter{white-space:nowrap}::-webkit-input-placeholder{color:#9a9da0;opacity:1}:-moz-placeholder{color:#9a9da0;opacity:1}::-moz-placeholder{color:#9a9da0;opacity:1}:-ms-input-placeholder{color:#9a9da0;opacity:1}button:active,button:focus,input:active,input:focus{outline:0!important}button::-moz-focus-inner,input::-moz-focus-inner{border:0!important}body input:focus:required:invalid,body input:required:valid,body textarea:focus:required:invalid,body textarea:required:valid{color:#9a9da0}#panel,body{background-color:#e1e0e4}#panel{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}#panel>.container-fluid{-webkit-box-flex:1;-webkit-flex:1 0 auto;-ms-flex:1 0 auto;flex:1 0 auto}#panel footer{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto}body{font-family:Roboto,sans-serif;font-size:16px;position:relative;overflow-x:hidden;font-style:normal;line-height:1.5}.button,.h1,.h2,.h3,.h4,.h5,.h6,.input,.menu,.textarea,a.link,button.link,h1,h2,h3,h4,h5,h6,input,label,textarea{font-family:RobotoCondensed,sans-serif}.container-fluid{max-width:1600px}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin:0 0 20px;line-height:1.15;font-weight:400}.h1,h1{font-size:2.25em}.h2,h2{font-size:2em}.h3,h3{font-size:1.75em}.h4,h4{font-size:1.5em}.h5,h5{font-size:1.25em}.h6,h6{font-size:1em}.h1 a,.h2 a,.h3 a,.h4 a,.h5 a,.h6 a,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{color:#273849;text-decoration:none}a,a span,button,button span{text-decoration:underline}.h1 a:active,.h1 a:focus,.h1 a:hover,.h2 a:active,.h2 a:focus,.h2 a:hover,.h3 a:active,.h3 a:focus,.h3 a:hover,.h4 a:active,.h4 a:focus,.h4 a:hover,.h5 a:active,.h5 a:focus,.h5 a:hover,.h6 a:active,.h6 a:focus,.h6 a:hover,h1 a:active,h1 a:focus,h1 a:hover,h2 a:active,h2 a:focus,h2 a:hover,h3 a:active,h3 a:focus,h3 a:hover,h4 a:active,h4 a:focus,h4 a:hover,h5 a:active,h5 a:focus,h5 a:hover,h6 a:active,h6 a:focus,h6 a:hover{color:#0095d8}.page-title{width:100%}.page-title .h1,.page-title .h2,.page-title .h3,.page-title .h4,.page-title .h5,.page-title .h6,.page-title h1,.page-title h2,.page-title h3,.page-title h4,.page-title h5,.page-title h6{display:i;width:auto}.button,.icon.icon-dash span,ul{display:inline-block}.sidebar .h1,.sidebar .h2,.sidebar .h3,.sidebar .h4,.sidebar .h5,.sidebar .h6,.sidebar h1,.sidebar h2,.sidebar h3,.sidebar h4,.sidebar h5,.sidebar h6{color:#757a7f}.fa{color:#9a9da0;margin-right:7px}.fa.pull-right{margin-right:0;margin-left:7px}* span+.fa{margin:0 0 0 7px}a:focus{text-decoration:none}a .fa:hover,a i:hover{color:#0095d8}.fa:only-child,i:only-child{margin:0}.icon{line-height:16px}.icon.icon-dash span{position:relative;top:5px;width:12px;height:3px;background:#9a9da0;border-bottom:1px solid #fff}a,button{color:#0095d8}a.active,a.active .fa,a.active i,a.active span,a:hover,a:hover .fa,a:hover i,a:hover span,button.active,button.active .fa,button.active i,button.active span,button:hover,button:hover .fa,button:hover i,button:hover span{color:#0095d8;text-decoration:none}a.link,button.link{text-decoration:none}a.link>*,button.link>*{line-height:38px}a.link span,button.link span{text-decoration:underline}.button,.button span,.button.active span,.button:hover span,.dark-section a.active,.dark-section a:focus,.dark-section a:hover,.delimiter .link>a,.delimiter .link>a>span,.dropdown .dropdown-button,a.link:hover span,button span,button.link:hover span{text-decoration:none}a.link .fa,a.link i,button.link .fa,button.link i{color:#0095d8;margin-right:2px}.dark-section a{color:#fff}.dark-section a.active,button.active,button.active .fa,button.active i,button:hover,button:hover .fa,button:hover i{color:#0095d8}button{background:0 0;border:none}button:active,button:focus{outline:0}button::-moz-focus-inner{border:0}.button{padding:6px 15px;line-height:24px;-webkit-border-radius:2px;border-radius:2px;border:1px solid rgba(255,255,255,.15)}.button:active,.button:focus,.button:hover{border:1px solid rgba(255,255,255,.1)}.button.circle-button{-webkit-border-radius:50%;border-radius:50%}.button.active span,.button:hover span{color:inherit}.buttons .button{float:left;margin-right:20px}.buttons .button-group .button,.buttons .button:last-child{margin-right:0}.buttons .button.pull-right{margin-right:0;margin-left:20px}.button-group .button{float:left;-webkit-border-radius:0;border-radius:0}.button-group .button:first-child{-webkit-border-radius:2px 0 0 2px;border-radius:2px 0 0 2px}.button-group .button:last-child{-webkit-border-radius:0 2px 2px 0;border-radius:0 2px 2px 0}.default-button{color:#273849;background:#e7e7e7}.default-button .fa,.default-button i{color:#273849!important}.default-button.active,.default-button:focus,.default-button:hover{color:#273849;background:#eee}.accent-button{color:#fff;background:#0095d8}.accent-button .fa,.accent-button i{color:#fff!important}.accent-button.active,.accent-button:focus,.accent-button:hover{color:#fff;background:#0079bf}.dark-button{color:#fff;background:#273849}.dark-button .fa,.dark-button i{color:#fff!important}.dark-button.active,.dark-button:focus,.dark-button:hover{color:#fff;background:#1F3245}.red-button{color:#fff;background:#b71332}.red-button .fa,.red-button i{color:#fff!important}.red-button.active,.red-button:focus,.red-button:hover{color:#fff;background:#9b0d28}.transparent-button{opacity:.75}.transparent-button.active,.transparent-button:hover{opacity:1}.dashed-button,.dashed-button:not(.active):focus,.dashed-button:not(.active):hover{color:#0095d8;background:0 0}.dashed-button span,.dashed-button:not(.active):focus span,.dashed-button:not(.active):hover span{border-bottom:1px dashed}.dashed-button.active span,.dashed-button:hover span,.dashed-button:not(.active):focus.active span,.dashed-button:not(.active):focus:hover span,.dashed-button:not(.active):hover.active span,.dashed-button:not(.active):hover:hover span{border-bottom:none}.small-button{padding:2px 10px 3px}button svg{width:30px;height:30px}button svg .close-x{stroke:#9a9da0;fill:transparent;stroke-linecap:round;stroke-width:4}ul{list-style:none;margin:0;padding:0}ul.horisontal{display:block;height:auto}.horisontal.list,.indent,.indent.indent-lg{display:inline-block}ul.horisontal li{float:left;margin-right:20px}ul.horisontal li:last-child{margin-right:0}.horisontal.list{width:100%;float:left}.horisontal .item{float:left}.horisontal.four-item .item{width:25%}.fixed-right{position:absolute;top:-10px;right:0}.fixed-left{position:absolute;left:0}p{margin:0 0 15px}.font-20{font-size:1.25em}.small{font-size:.75em!important;margin-bottom:12px}.small-description,.small-text{font-size:.75em!important;color:#9a9da0}.small-description{margin-bottom:20px}a.small-description:hover{color:#9a9da0}.text{text-align:left}.text em,.text i{color:#333}.help-text{color:#757a7f;font-size:.875em}.info{color:#0095d8!important}.success{color:#26b713!important}.danger{color:#b71332!important}::-moz-selection,mark{background:#0095d8;color:#fff}::selection,mark{background:#0095d8;color:#fff}.opacity-0{-webkit-transition:all .5s ease;transition:all .5s ease;opacity:0}.image,img{max-width:100%}.image.avatar,img.avatar{-webkit-border-radius:50%;border-radius:50%;background-color:#E1E0E4}.image.avatar.micro,img.avatar.micro{width:22px}.image.avatar.mini,img.avatar.mini{width:50px}svg{max-height:100%}.m-t--5{margin-top:-5px}.m-t--15{margin-top:-15px}.m-t-5{margin-top:5px}.m-t-20{margin-top:20px}.m-t-30{margin-top:30px}.m-b-0{margin-bottom:0}.m-b-10{margin-bottom:10px}.m-b-20{margin-bottom:20px}.m-b-30{margin-bottom:30px}.m-l-5{margin-left:5px}.m-l-10{margin-left:10px}.m-l-20{margin-left:20px}.m-l-30{margin-left:30px}.m-l-50{margin-left:50px}.m-r-5{margin-right:5px}.m-r-10{margin-right:10px}.m-r-20{margin-right:20px}.m-r-25{margin-right:25px}.p-t-0{padding-top:0!important}.p-r-25{padding-right:25px}.indent{margin-bottom:20px;width:100%}.indent.indent-md,.indent.indent-sm,.indent.indent-xs{display:none}.delimiter,.delimiter .link>a,section{display:inline-block}section{width:100%;padding:20px 25px 25px;margin-bottom:30px}section section{padding:0}.dark-section{background:#273849;color:#fff}.white-section{background:#f9f9f9;-webkit-border-radius:3px;border-radius:3px}.delimiter{position:relative;border-top:1px solid #eee;border-bottom:1px solid #fff;float:left;width:100%}.delimiter.delimiter-2x{border-width:2px}.delimiter.delimiter-dashed{border-top:none;border-bottom:1px dashed #c4c7ca}.delimiter .link{position:absolute;left:50%}.delimiter .link>a{position:relative;left:-50%;top:-15px;background:#f9f9f9;line-height:20px;padding:4px 12px;-webkit-border-radius:15px;border-radius:15px;border:1px solid #c4c7ca;color:#757a7f}.delimiter .link>a>span{font-size:.875em}.delimiter .link>a .fa,.delimiter .link>a>i{position:relative;top:1px;margin:0}.form-group,.input-group,.social-links{display:inline-block;margin-bottom:20px}.delimiter .link>a:hover{color:#0095d8}.menu a{color:#333}.menu a .fa,.menu a i{margin-right:10px}.dark-section .menu a:hover,.dark-section .menu a:hover .fa,.dark-section .menu a:hover i,.menu a:hover,.menu a:hover .fa,.menu a:hover i{color:#0095d8}.dark-section .menu .active a,.menu .active a{color:#0095d8;text-decoration:none}.dark-section .menu a{color:#fff}.notification{position:relative}.notification:after{content:"";width:8px;height:8px;-webkit-border-radius:50%;border-radius:50%;background:#0095d8;position:absolute;right:-12px;top:0;border:3px solid #f9f9f9;-webkit-box-sizing:content-box;box-sizing:content-box}.social-links .fa,.social-links i{font-size:20px}.social-links ul:last-child{margin-left:50px}label{float:left}.input,.textarea,input,textarea{display:inline-block;line-height:36px;background:#e9e9e9;border:1px solid #eee;-webkit-border-radius:2px;border-radius:2px;padding:0 10px;width:100%;max-width:100%}.input:focus,.input:hover,.textarea:focus,.textarea:hover,input:focus,input:hover,textarea:focus,textarea:hover{background:#ececec}.textarea{min-height:38px}input[type=checkbox]{line-height:1;height:20px}form .dropdown.select-dropdown .dropdown-button{display:inline-block;width:100%;border-bottom:none}.input,input{height:38px}.white-form input,.white-form textarea{background:#fff}.form-group .checkbox{float:left}.form-group .checkbox:first-child{margin-right:20px}.form-group .checkbox:last-child{margin-left:20px}.form-group,.input-group{width:100%;float:left}.input-group{display:table;width:100%;vertical-align:top}.input-group input,.input-group label{position:relative;display:table-cell;width:100%;-webkit-border-radius:2px 0 0 2px;border-radius:2px 0 0 2px}.input-group.two-fields .input{float:left;width:50%}.input-group.two-fields .input:first-child{border-right-color:#c5c5c5}.input-group .fixed,.input-group .input-group-button{display:table-cell;width:1%;vertical-align:top}.input-group .fixed .button,.input-group .input-group-button .button{white-space:nowrap;-webkit-border-radius:0 2px 2px 0;border-radius:0 2px 2px 0}.input-group .fixed .checkbox,.input-group .input-group-button .checkbox{top:2px;margin:0}.input-group .fixed:first-child{padding-right:10px}.input-group .fixed:last-child{padding-left:10px}.table-block{display:table;width:100%}.table-block .responsive-block{position:relative;display:table-cell;width:100%;vertical-align:top}.table-block .fixed-block{display:table-cell;width:1%;vertical-align:top}.dropdown,.dropdown.active .dropdown-arrow{position:relative}.dropdown.active .dropdown-arrow:after{content:"";width:12px;height:12px;background:#fff;border-left:1px solid #fff;border-top:1px solid #fff;-webkit-box-shadow:-3px -3px 3px rgba(0,0,0,.05);box-shadow:-3px -3px 3px rgba(0,0,0,.05);-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);position:absolute;z-index:9999;top:23px;right:14px}.dropdown.active .dropdown-container{display:inline-block;width:100%}.dropdown.select-dropdown .dropdown-container{top:38px}.dropdown.select-dropdown.active .dropdown-arrow:after{top:31px;left:14px}.dropdown .dropdown-button{color:#0095d8;border-bottom:1px dashed}.dropdown .dropdown-button:hover,.dropdown.active .dropdown-button{border-bottom:none}.dropdown .dropdown-container{display:none;position:absolute;z-index:9998;top:30px;right:0;min-width:240px;width:auto;background-color:#fff;border:1px solid #fff;border-top:none;-webkit-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);color:#273849;line-height:1;padding:15px 0}.dropdown .dropdown-container .container-body,.dropdown .dropdown-container .container-header,.select-list li{width:100%;display:inline-block}.dropdown .dropdown-container .container-header{padding:15px 20px 10px;text-align:center;line-height:20px}.dropdown .dropdown-container .container-header .title{float:left}.dropdown .dropdown-container .container-header .title .fa,.dropdown .dropdown-container .container-header .title i{margin-right:7px}.dropdown .dropdown-container .container-body{padding:0 20px}.dropdown .dropdown-container a{display:inline-block;float:none;color:#273849;margin:0;padding:0}.dropdown .dropdown-container .fa,.dropdown .dropdown-container a .fa,.dropdown .dropdown-container a i,.dropdown .dropdown-container i{line-height:1}.dropdown .dropdown-container a .fa,.dropdown .dropdown-container a i,.dropdown .dropdown-container a span{line-height:20px;float:left}.dropdown .dropdown-container ul{display:inline-block;width:100%;height:auto}.select-list li{position:relative;margin:5px 0;cursor:pointer}.select-list li span{float:left;width:-webkit-calc(100% - 25px);width:calc(100% - 25px)}.select-list li .fa,.select-list li .icon,.select-list li i{float:left;width:25px;margin:1px 0 0}.select-list li.selected,.select-list li.selected>.fa,.select-list li.selected>i,.select-list li:hover,.select-list li:hover>.fa,.select-list li:hover>i{color:#0095d8}.select-list li.selected ul,.select-list li:hover ul{color:#273849}.select-list li ul{padding:5px 0 5px 20px}#header-widget{padding:0;line-height:50px;font-size:.875em}#header-widget ul{height:50px}#header-widget ul li{display:inline-block;float:left;margin-right:25px}#header-widget ul li span{float:left}#header-widget .fa,#header-widget i{color:#fff;float:left;font-size:20px;line-height:50px}#header-widget .user-panel>div{float:left}#header-widget .user-panel .dropdown-button,#header-widget .user-panel>.button{border:none;float:left;margin:0 5px;padding:0 10px}#header-widget .user-panel .dropdown-button span,#header-widget .user-panel>.button span{color:#fff;text-decoration:underline}#header-widget .user-panel .dropdown-container .list li a span,#header-widget .user-panel .dropdown.active .button span,#header-widget .user-panel .dropdown.active .dropdown-button span,.menu-section .main-menu li a,.menu-section .main-menu li a span{text-decoration:none}#header-widget .user-panel .dropdown-button .fa,#header-widget .user-panel .dropdown-button i,#header-widget .user-panel>.button .fa,#header-widget .user-panel>.button i{margin:0;color:#9a9da0}#header-widget .user-panel .exit-button{margin-right:-7px}#header-widget .user-panel .notification.button .fa,#header-widget .user-panel .notification.button i,#header-widget .user-panel .notification.dropdown-button .fa,#header-widget .user-panel .notification.dropdown-button i{color:#26b713}#header-widget .user-panel .active a .fa,#header-widget .user-panel .active a i,#header-widget .user-panel .dropdown.active .button .fa,#header-widget .user-panel .dropdown.active .button i,#header-widget .user-panel .dropdown.active .dropdown-button .fa,#header-widget .user-panel .dropdown.active .dropdown-button i,#header-widget .user-panel .notification.button.active .fa,#header-widget .user-panel .notification.button.active i,#header-widget .user-panel .notification.button:hover .fa,#header-widget .user-panel .notification.button:hover i,#header-widget .user-panel .notification.dropdown-button.active .fa,#header-widget .user-panel .notification.dropdown-button.active i,#header-widget .user-panel .notification.dropdown-button:hover .fa,#header-widget .user-panel .notification.dropdown-button:hover i{color:#fff}#header-widget .user-panel .notification.button:after,#header-widget .user-panel .notification.dropdown-button:after{right:0;top:11px;background:#26b713;border:3px solid #273849}#header-widget .user-panel .notifications .notification:after{right:7px}#header-widget .user-panel .letters .notification:after{right:2px}#header-widget .user-panel .avatar{width:40px;margin:5px 15px 0 0}#header-widget .user-panel .dropdown{position:inherit}#header-widget .user-panel .dropdown.active .dropdown-arrow:after{background:#f9f9f9;top:44px;right:50%;margin-right:-5px}#header-widget .user-panel .dropdown-container{top:50px;width:314px;background-color:#f9f9f9;padding:10px 0}#header-widget .user-panel .dropdown-container .fa,#header-widget .user-panel .dropdown-container a .fa,#header-widget .user-panel .dropdown-container a i,#header-widget .user-panel .dropdown-container i{float:none;color:#273849}#header-widget .user-panel .dropdown-container .fa,#header-widget .user-panel .dropdown-container i{line-height:1}#header-widget .user-panel .dropdown-container .container-header{padding:0 11px 10px}#header-widget .user-panel .dropdown-container .container-header .fa,#header-widget .user-panel .dropdown-container .container-header i{color:#273849}#header-widget .user-panel .dropdown-container .container-body{padding:0 6px}#header-widget .user-panel .dropdown-container ul{height:auto}#header-widget .user-panel .dropdown-container form{padding:15px 5px;display:inline-block;width:100%}#header-widget .user-panel .dropdown-container form label{line-height:1.5}#header-widget .user-panel .dropdown-container form .button .fa,#header-widget .user-panel .dropdown-container form .button i{font-size:16px;line-height:1}#header-widget .user-panel .dropdown-container .list{height:auto;padding:5px 0}#header-widget .user-panel .dropdown-container .list li{width:100%;position:relative;padding:7px 0;border-top:1px solid #fff;border-bottom:1px solid #eee}#header-widget .user-panel .dropdown-container .list li:first-child{border-top:none}#header-widget .user-panel .dropdown-container .list li:last-child{border-bottom:none}#header-widget .user-panel .dropdown-container .list li a:first-child{position:relative;padding:0 30px 0 45px;display:inline-block;width:100%}#header-widget .user-panel .dropdown-container .list li a:first-child>.fa,#header-widget .user-panel .dropdown-container .list li a:first-child>i{margin:0 15px 0 5px;position:absolute;left:8px;top:2px}#header-widget .user-panel .dropdown-container .list li a.delete-button{position:absolute;top:7px;right:0}#header-widget .user-panel .dropdown-container .list li a.delete-button>.fa,#header-widget .user-panel .dropdown-container .list li a.delete-button>i{color:#9a9da0;font-size:14px;padding:0 5px}#header-widget .user-panel .dropdown-container .list li .avatar{width:22px;margin:0 15px 0 5px;position:absolute;left:5px;top:2px}.menu-section,.menu-section .main-menu{position:relative}#header-widget .user-panel .dropdown-container .list li .small-text,#header-widget .user-panel .dropdown-container .list li .text{display:inline-block;width:100%}#header-widget .user-panel .dropdown-container .list li .small-text{color:#9a9da0;font-size:.6875em}#header-widget .user-panel .dropdown-container .list li .text{font-size:.875em}#header-widget .user-panel .dropdown-container .list.letters-list a:first-child{padding:0 30px 0 5px}#header-widget .user-panel .dropdown-container .user-menu{float:left}#header-widget .user-panel .dropdown-container .user-menu li{float:left;width:90px;margin:5px;padding:10px 0;text-align:center}#header-widget .user-panel .dropdown-container .user-menu li a{display:inline-block;width:100%;color:#757a7f}#header-widget .user-panel .dropdown-container .user-menu li a span{text-decoration:none;display:inline-block;width:100%;float:none;margin-top:10px}#header-widget .user-panel .dropdown-container .user-menu li a .fa,#header-widget .user-panel .dropdown-container .user-menu li a i{color:#9a9da0;float:none;font-size:24px;margin:0}#header-widget .user-panel .dropdown-container .user-menu li a:focus,#header-widget .user-panel .dropdown-container .user-menu li a:hover,#header-widget .user-panel .dropdown-container .user-menu li a:hover span,#header-widget .user-panel .dropdown-container .user-menu li.active a{opacity:1;color:#273849}#header-widget .user-panel .dropdown-container .user-menu li a:focus .fa,#header-widget .user-panel .dropdown-container .user-menu li a:focus i,#header-widget .user-panel .dropdown-container .user-menu li a:hover .fa,#header-widget .user-panel .dropdown-container .user-menu li a:hover i,#header-widget .user-panel .dropdown-container .user-menu li a:hover span .fa,#header-widget .user-panel .dropdown-container .user-menu li a:hover span i,#header-widget .user-panel .dropdown-container .user-menu li.active a .fa,#header-widget .user-panel .dropdown-container .user-menu li.active a i{color:inherit}#header-widget .user-panel .dropdown-container .user-menu li.notification:after{right:17px;top:2px}#header-widget .user-panel .user .dropdown-container .container-header .title{float:none}#header .info-menu-container,#header .search-container,#header h1{float:left}#header-widget .sign-in-container a.dropdown-button{padding:0}#header-widget .sign-in-container .sign-in-social{margin:15px 5px 0}#header-widget .sign-in-container .sign-in-social a.button{margin-right:11px;padding:9px 0;width:46px;height:46px}#header-widget .sign-in-container .sign-in-social a.button .fa,#header-widget .sign-in-container .sign-in-social a.button i{font-size:24px}#header-widget .sign-in-container .sign-in-social a.button:last-child{margin-right:0}body.is-windows-phone #header .logo{height:100%}#header{margin-bottom:24px}#header .logo{margin:20px 0}#header h1{margin-top:24px}#header h1 .slogan{margin-top:10px;display:block;font-size:.5em;line-height:1.2;opacity:.8}#header .search-container{width:55%}#header .info-menu-container{width:45%}#header .contact-menu{margin-top:20px}#header .social-links{margin-top:15px;margin-bottom:10px}#header .info-menu{margin:15px 0;float:right}#header .info-icon{font-size:30px;color:#0095d8;margin:15px}.menu-section{display:inline-block;width:100%;background:#F5F5F5;-webkit-box-shadow:0 2px 5px rgba(0,0,0,.1);box-shadow:0 2px 5px rgba(0,0,0,.1);-webkit-border-radius:5px;border-radius:5px;line-height:32px;padding:0 5px}.menu-section .main-menu li{float:left;padding:11px 15px;border-right:1px solid #fff;border-left:1px solid #eee}.menu-section .main-menu li:first-child{border-left:none}.menu-section .main-menu li:last-child{border-right:none}.menu-section .main-menu li i.fa{margin-left:7px;margin-right:0}.menu-section .main-menu li a{font-size:1.125em;color:#333}.menu-section .main-menu li a:hover,.menu-section .main-menu li.active>a,.menu-section .main-menu li.active>a .fa,.menu-section .main-menu li.active>a i,.slideout-open .mobile-buttons-menu button *{color:#0095d8}.menu-section .main-menu li ul{display:none;position:absolute;z-index:999;top:55px;margin-left:-17px;background:-webkit-gradient(linear,left top,left bottom,from(#f6f9fa),color-stop(25%,#f9f9fa),color-stop(80%,#eee),to(#ececed));background:-webkit-linear-gradient(top,#f6f9fa 0,#f9f9fa 25%,#eee 80%,#ececed 100%);background:linear-gradient(to bottom,#f6f9fa 0,#f9f9fa 25%,#eee 80%,#ececed 100%);-webkit-border-radius:0 0 2px 2px;border-radius:0 0 2px 2px;border:1px solid #f9f9f9;border-top:1px solid #eee;padding:10px 0}.menu-section .main-menu li ul li{padding:0;float:none;line-height:1.6;border:none;margin-bottom:5px}.menu-section .main-menu li ul li a{display:block;padding:0 20px;font-size:1em}.menu-section .main-menu li:hover ul{display:block}.search-form input{font-size:1.125em}.search-section .search-form .input-group{margin-bottom:10px}#menu{display:none}.slideout-open #menu{display:block}.mobile-buttons-menu{margin-top:20px}.mobile-buttons-menu button{display:inline-block;margin-bottom:15px;padding:0}.mobile-buttons-menu button *{float:right;line-height:32px;color:#9a9da0}.mobile-buttons-menu button .fa,.mobile-buttons-menu button i{margin:0 0 0 10px;width:32px}.breadcrumbs{font-size:.875em;margin-bottom:5px}.breadcrumbs>a,.breadcrumbs>li{float:left;margin-right:10px}.breadcrumbs>a:after,.breadcrumbs>li:after{font-family:FontAwesome;content:"\f101";margin-left:10px}.breadcrumbs>a:last-child,.breadcrumbs>li:last-child{margin-right:0}.breadcrumbs a{color:#273849;text-decoration:underline}.breadcrumbs a:hover{color:#0095d8;text-decoration:none}</style>

    <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
    <script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)};function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n};function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>

    <!-- Load Fonts CSS Start -->
    <script>
        loadCSS( "/css/fonts.min.css?ver=1.0.0", false, "all" ); // Loading fonts, if the site is located in a subfolder
        //		loadLocalStorageCSS( "webfonts", "/css/fonts.min.css?ver=1.0.0" ); // Loading fonts, if the site is at the root
    </script>
    <!-- Load Fonts CSS End -->

    <!-- Load Custom CSS Start -->

    <script>loadCSS( "/css/main.min.css?ver=1.0.0", false, "all" );</script>
    <!-- Load Custom CSS End -->

    <!-- Load Custom CSS Compiled without JS Start -->
    <noscript>
        <link rel="stylesheet" href="/css/fonts.min.css">
        <link rel="stylesheet" href="/css/main.min.css">
    </noscript>
    <!-- Load Custom CSS Compiled without JS End -->

    <!-- Custom Browsers Color Start -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#e1e0e4">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#e1e0e4">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#e1e0e4">
    <!-- Custom Browsers Color End -->

    <!-- Scripts Laravel -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>

<div id="menu" class="dark-section">
    <button class="menu-close-button close-button">
        <svg viewbox="0 0 40 40">
            <path class="close-x" d="M 10,10 L 30,30 M 30,10 L 10,30" />
        </svg>
    </button>
    <nav>
        <div class="title">Меню</div>
        <ul class="menu main-menu pull-left">
            {!! $menu->main() !!}
        </ul>

        <div class="title">Информация</div>
        <ul class="menu info-menu">
            {!! $menu->info() !!}
        </ul>
        <ul class="menu contact-menu m-t-20">
            {!! $menu->system() !!}
        </ul>
    </nav>

    <div class="title">Мы в социальных сетях:</div>
    <div class="social-links">
        @if(isset($siteSettings['socialLinks']) && is_array($siteSettings['socialLinks']))
            <ul class="pull-left horisontal">
                @foreach($siteSettings['socialLinks'] as $key => $socialLink)
                    <li><a href="{{ $socialLink->value }}" target="_blank" rel="nofollow noopener"><i class="fa fa-{{ $key }}"></i></a></li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

<div id="panel" @if(isset($panelClass)) class="{{ $panelClass }}" @endif>
    <header>

        {!! $headerPanel->show() !!}

        <div id="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 col-logo">
                        <a href="{{ url('/') }}">
                            <img src="/img/logo-full.svg" alt="Avtorem.info" class="logo">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-5 col-title">
                        @if(isset($siteSettings['H1']) && is_array($siteSettings['H1']))
                            <h1>
                                @if(isset($siteSettings['H1']['title']) && is_object($siteSettings['H1']['title']))
                                    {{ $siteSettings['H1']['title']->value }}
                                @endif
                                @if(isset($siteSettings['H1']['slogan']) && is_object($siteSettings['H1']['slogan']))
                                    <span class="slogan">
                                        {{ $siteSettings['H1']['slogan']->value }}
                                    </span>
                                @endif
                            </h1>
                        @endif
                    </div>
                    <div class="visible-xs visible-sm col-sm-2 col-xs-1 col-menu-button">
                        <div class="menu mobile-buttons-menu">
                            <button class="menu-toggle-button toggle-button pull-right">
                                <i class="fa fa-bars fa-2x"></i>
                                <span>Меню</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-5 hidden-xs hidden-sm">
                        <div class="search-container">
                            <nav>
                                <ul class="menu contact-menu horisontal">
                                    {!! $menu->system() !!}
                                </ul>
                            </nav>
                            <div class="clearfix"></div>
                            <div class="social-links">
                                @if(isset($siteSettings['socialLinks']) && is_array($siteSettings['socialLinks']))
                                    <ul class="pull-left horisontal">
                                        @foreach($siteSettings['socialLinks'] as $key => $socialLink)
                                            <li><a href="{{ $socialLink->value }}" target="_blank" rel="nofollow noopener"><i class="fa fa-{{ $key }}"></i></a></li>
                                        @endforeach
                                    </ul>
                                @endif

                                <ul class="pull-left horisontal">
                                    <li><a href="#"><i class="fa fa-bookmark-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <form action="search.html" method="GET" class="search-form white-form hidden-xs hidden-sm" id="search-form-1">
                                <div class="input-group">
                                    <input type="text" name="query" placeholder="Поиск по сайту">
                                    <span class="input-group-button">
                                        <button type="submit" form="search-form-1" value="" class="button accent-button">
                                            <i class="fa fa-search"></i>
                                            <span class="hidden-md">Искать</span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="info-menu-container">
                            <ul class="menu info-menu">
                                {!! $menu->info() !!}
                            </ul>
                            <i class="info-icon fa fa-info-circle pull-right"></i>
                        </div>
                    </div>
                </div>
                <div class="row hidden-xs hidden-sm">
                    <div class="col-md-12">
                        <div class="menu-section">
                            <nav>
                                <ul class="menu main-menu pull-left">
                                    {!! $menu->main() !!}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="search-section visible-sm visible-xs">
                <form action="search.html" method="GET" class="search-form white-form" id="search-form-2">
                    <div class="input-group">
                        <input type="text" name="query" placeholder="Поиск по сайту">
                        <span class="input-group-button">
                            <button type="submit" form="search-form-2" value="" class="button accent-button">
                                <i class="fa fa-search"></i>
                                <span class="hidden-md">Искать</span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </header>

    @yield('layout-content')

    <footer class="dark-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="first-column">
                        <div class="row">
                            <div class="full-xxs col-xs-6 col-sm-6 col-md-12">
                                <img src="/img/logo-white.svg" alt="Avtorem.info" class="logo">
                            </div>
                            <div class="full-xxs col-xs-6 col-sm-6 col-md-12">
                                <div class="copyright">
                                    @if(isset($siteSettings['copyright']) && is_object($siteSettings['copyright']))
                                        {!! $siteSettings['copyright']->value !!}
                                    @endif
                                    <span class="without-enter">
                                        © <a href="{{ url('/') }}" class="active">www.avtorem.info</a> 2010 - 2016
                                    </span>
                                </div>
                                <div class="social-links">
                                    @if(isset($siteSettings['socialLinks']) && is_array($siteSettings['socialLinks']))
                                        <ul class="pull-left horisontal">
                                            @foreach($siteSettings['socialLinks'] as $key => $socialLink)
                                                <li><a href="{{ $socialLink->value }}" target="_blank" rel="nofollow noopener"><i class="fa fa-{{ $key }}"></i></a></li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    <ul class="pull-left horisontal">
                                        <li><a href="#"><i class="fa fa-bookmark-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>

                                <p class="m-t-20 small hidden-xs">
                                    Нашли опечатку? Выделите фрагмент и отправьте нажатием Ctrl+Enter.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-0 col-sm-3 col-xs-6">
                    <div class="title">Меню</div>
                    <nav>
                        <ul class="menu main-menu">
                            {!! $menu->main() !!}
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                    <div class="title">Информация</div>
                    <ul class="menu info-menu">
                        {!! $menu->info() !!}
                    </ul>
                    <nav>
                        <ul class="menu contact-menu">
                            {!! $menu->system() !!}
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="last-column">
                        <div class="title">
                            Подписка на рассылку
                        </div>
                        <form action="#" id="subscribtions-form">
                            <div class="input-group">
                                <input type="text" placeholder="Введите email-адрес">
                                <span class="input-group-button">
                                    <button class="button accent-button" type="button">Подписаться</button>
                                </span>
                            </div>
                        </form>
                        <p class="small">
                            * Подписавшись, Вы будете получать уведомления
                            на email о новых статьях и вопросах.
                        </p>
                        <p class="small">
                            ** Для отмены подписки введите email-адрес,
                            на который оформлена подписка, и нажмите кнопку «Отписаться».
                        </p>

                        @if(isset($siteSettings['counter']) && is_object($siteSettings['counter']))
                            <div class="m-t-20 align-center-xs">
                                {!! $siteSettings['counter']->value !!}
                            </div>
                        @endif

                        <p class="m-t-20 small visible-xs">
                            Нашли опечатку? Выделите фрагмент и отправьте нажатием Ctrl+Enter.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Optimized loading JS Start -->
<script>
    var scr = {"scripts":[
        {"src" : "/js/libs.min.js", "async" : false},
        {"src" : "/js/common.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
<!-- Optimized loading JS End -->

</body>
</html>