
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
    if($(".js_thu-vien-anh-slider").length > 0){
        $(".js_thu-vien-anh-slider").each(function (){
            $(this).owlCarousel({
                items: 3,
                dots: false,
                stagePadding: 50,
                loop: true,
                animateIn: "slideInLeft",
                animateOut: "slideOutLeft"
            });
        });
    }

    if($(".js_thu-vien-anh-slider2").length > 0){
        $(".js_thu-vien-anh-slider2").each(function (){
            $(this).owlCarousel({
                items: 3,
                dots: false,
                loop: true,
                animateIn: "slideInLeft",
                animateOut: "slideOutLeft"
            });
        });
    }

    if($(".js_doitac-slider").length > 0){
        $(".js_doitac-slider").each(function (){
            $(this).owlCarousel({
                items: 6,
                nav: true,
                dots: false,
                loop: true,
                navText: ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
                animateIn: "slideInLeft",
                animateOut: "slideOutLeft"
            });
        });
    }

    if($(".js_thu-vien-youtube-slider").length > 0){
        $(".js_thu-vien-youtube-slider").each(function (){
            $(this).owlCarousel({
                items: 3,
                nav: false,
                dots: true,
                loop: true,
                navText: ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
                animateIn: "slideInLeft",
                animateOut: "slideOutLeft"
            });
        });
    }

    if($(".famous-people-outer .infor-famous").length > 0){
        $(".famous-people-outer .infor-famous").each(function () {
           $(this).find("li a").on("click",function (event) {
               event.preventDefault();
               var src_img = $(this).data("image");
               $(this).parents(".famous-people-outer").find(".img-famous img").attr("src",src_img).hide().fadeIn();
               $(this).parents(".famous-people-wrap").find(".img-bg-wrap").css("background","url("+src_img+")");
           }) ;
        });
    }

    if($(".chuyen-nganh-wrap").length > 0){
        $(".js_chuyen-nganh-wrap").each(function () {
            $(this).find(".col-title .nav li a").on("click",function () {
               $(this).parents(".col-title").find(" .nav li .title-content").slideUp("fast");
               $(this).parents("li").find(".title-content").slideDown("fast");
            });
        });
    }

});

$(window).on("load",function () {

});

$(window).on("resize",function () {

});