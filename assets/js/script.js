
"use strict";

$(document).ready(function () {

    if($(".js_sinhvien-slider").length > 0){
        $(".js_sinhvien-slider").each(function (){
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

});

$(window).on("load",function () {

});

$(window).on("resize",function () {

});