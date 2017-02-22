$(function(){function e(e){var t=$(window).width(),o=e.find(".item-image img").height(),n=(e.find(".item-title").outerHeight(!0),e.find(".item-text .page-info").outerHeight(!0),16);t<1200&&(n=15),textHeight=o-o%(1.5*n)+4,(null==o||t<=480)&&(textHeight="auto"),e.find(".item-text").height(textHeight)}is.windowsPhone()&&$("body").addClass("is-windows-phone"),$("input").iCheck({checkboxClass:"checkbox icheckbox_flat-blue",radioClass:"iradio_flat-blue"}),$(window).click(function(){$(".dropdown").removeClass("active")}),$(document).on("click",".dropdown",function(e){e.stopPropagation()}),$(document).on("click",".dropdown-button",function(e){e.preventDefault(),$(this).parent().is(".active")?$(this).parent().removeClass("active"):($(".dropdown").removeClass("active"),$(this).parent().addClass("active"))}),$(document).on("click",".slide-down-button",function(e){e.preventDefault(),e.stopPropagation();var t=$(this).parent(),o=t.find(".slide-down-content");o.is(":visible")?(o.slideUp(),t.removeClass("open")):(o.slideDown(),t.addClass("open"))});var t=new Slideout({panel:document.getElementById("panel"),menu:document.getElementById("menu"),padding:256,tolerance:70,side:"right"});t.enableTouch(),document.querySelector(".toggle-button").addEventListener("click",function(e){e.stopPropagation(),t.toggle()}),document.querySelector(".menu-close-button").addEventListener("click",function(e){t.close()}),document.querySelector("#panel").addEventListener("click",function(e){t.close()}),$("#menu").on("click",".open-dropdown",function(e){e.preventDefault();var t=$(this).parent().parent().find("ul");t.is(":visible")?t.slideUp():t.slideDown()}),$(".menu-section .search-form input").focusout(function(e){$(".menu-section nav").removeClass("opacity-0")}),$(".menu-section .search-form input").focusin(function(e){$(".menu-section nav").addClass("opacity-0")}),$(document).on("click",".show-popup-button",function(e){var t=$(this).data("popupId");$("html, body").css("overflow","hidden"),$("#"+t).addClass("open"),$("#"+t+" input").focus()}),$(document).on("click",".popup-close-button",function(e){$("html, body").css("overflow","auto"),$(this).parent().removeClass("open")}),$(document).ready(function(){$(".blog .item:not(.full)").each(function(){e($(this))})}),$(window).resize(function(){$(".blog .item:not(.full)").each(function(){e($(this))})});var o=$(".dropify").dropify({messages:{default:"Кликните или перетащите файл.",replace:"Кликните или перетащите файл для замены.",remove:"Удалить",error:"Ошибка."},error:{fileSize:"Размер файла слишком большой (максимум 3Мб)."}});o.on("dropify.afterClear",function(e,t){$("#deleteImage").val(1)}),$(".dialog .scroll").slimScroll({start:"bottom",height:"340px"})});

$(function() {
    $(document).on('submit', '.send-ajax', function (event) {
        event.preventDefault ? event.preventDefault() : event.returnValue = false;

        var $form = $(this),
            values = $form.serializeArray(),
            url = $(this).attr('action');

        // добавление данных к запросу
        //        values.push({
        //            name: "rating",
        //            value: rating
        //        });

        formData = jQuery.param(values);

        $.ajax({
            url: url,
            dataType: "json",
            type: "POST",
            data: formData,
            async: true,
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
            },
            success: function(response) {

                $form.find('.has-error').removeClass('has-error');
                $form.find('.help-block.error').text('');
                $form.find('.error-message').text('');

                if(response.success){
                    $form.trigger('reset');
                    console.log(response.message);
                    $form.find('.success-message').text(response.message);
                }

                if(response.redirectPath) {
                    window.location.href = response.redirectPath;
                }
            },
            error: function (response) {
                var responseText = JSON.parse(response.responseText);

                $form.find('.has-error').removeClass('has-error');
                $form.find('.help-block.error').text('');
                $form.find('.error-message').text('');

                if(response.status == 422) {
                    $.each(responseText, function(index, value) {
                        var errorDiv = '.' + index + '_error';
                        $form.find(errorDiv).parent().addClass('has-error');
                        $form.find(errorDiv).empty().append(value);
                    });
                } else {
                    $form.find('.error-message').text(responseText.error);
                }
            }
        });
    });
});