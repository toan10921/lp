
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
                animateOut: "slideOutLeft",
                responsive: {
                    0:{
                        items:1,
                        dots: false,
                    },
                    600:{
                        items:2,
                        dots: false,
                    },
                    1000:{
                        items:3,
                        loop:false
                    }
                }
            });
        });
    }
    if($(window).width > 767){
        $('.dang_ky_btn').on("click",function(){
            $.fancybox.close();
        });
    }else{
        $('.dang_ky_btn').on("click",function(){
            $.fancybox.close();
        });
    }
});

$(window).on("load",function () {

});

$(window).on("resize",function () {

});