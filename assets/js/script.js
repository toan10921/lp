
"use strict";

$(document).ready(function () {
    if($(".js_banner-slider").length > 0){
        $(".js_banner-slider").each(function () {
            $(this).owlCarousel({
                items: 1,
                nav: true,
                loop: true,
                navText: ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
                animateIn: "fadeIn",
                animateOut: "fadeOut"
            });
        });
        // Fix height slider
        $('.js_banner-slider .banner-info').each(function () {
            if ($(this).find('.slider-content-text').length > 0) {
                var height_content = $(this).find('.slider-content-text')["0"].clientHeight;
                $(this).css('height', height_content);
            }
        })
    }
    if($(".js_sinhvien-slider").length > 0){
        $(".js_sinhvien-slider").each(function (){
            $(this).owlCarousel({
                items: 3,
                nav: true,
                dots: false,
                loop: true,
                navText: ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
                animateIn: "slideInLeft",
                animateOut: "slideOutLeft"
            });
        });
    }


});

$(window).on("load",function () {
    // check minheight

    // if($(".js_sinhvien-slider .sinhvien-item").length > 0){
    //     var temp_height = 0;
    //     $('.js_sinhvien-slider .sinhvien-item').each(function () {
    //
    //         var height_content = $(this)["0"].clientHeight;
    //         if(height_content > temp_height){
    //             temp_height = height_content;
    //         }
    //     });
    //     $('.js_sinhvien-slider .sinhvien-item').each(function () {
    //         $(this).css('height',temp_height);
    //     });
    // }
});

$(window).on("resize",function () {
    // check minheight
    //
    // if($(".js_sinhvien-slider .sinhvien-item").length > 0){
    //     var temp_height = 0;
    //     $('.js_sinhvien-slider .sinhvien-item').each(function () {
    //
    //         var height_content = $(this)["0"].clientHeight;
    //         if(height_content > temp_height){
    //             temp_height = height_content;
    //         }
    //     });
    //     $('.js_sinhvien-slider .sinhvien-item').each(function () {
    //         $(this).css('height',temp_height);
    //     });
    // }
});