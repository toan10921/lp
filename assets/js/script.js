
"use strict";

$(document).ready(function () {

    if($('.t888-slider').length > 0){
        $('.t888-slider').each(function () {
            var self = $(this);
            var item = self.attr('data-item');
            var speed = self.attr('data-speed');
            var itemres = self.attr('data-itemres');
            var nav = self.attr('data-navigation');
            var pag = self.attr('data-pagination');
            var text_prev = self.attr('data-prev');
            var text_next = self.attr('data-next');
            var margin = self.attr('data-margin');
            var stage_padding = self.attr('data-stage_padding');
            var start_position = self.attr('data-start_position');
            var merge = self.attr('data-merge');
            var loop = self.attr('data-loop');
            var mousewheel = self.attr('data-mousewheel');
            var animation_out = self.attr('data-animation_out');
            var animation_in = self.attr('data-animation_in');
            if(animation_in == 'none') animation_in = '';
            if(animation_out == 'none') animation_out = '';
            var pagination = false, navigation= false, singleItem = false;
            var autoplay;
            var autoplaytimeout = 5000;
            if(!margin) margin = 0;
            if(!stage_padding) stage_padding = 0;
            if(!start_position) start_position = 0;
            if(!merge) merge = false; else merge = true;
            if(!loop) loop = false; else loop = true;
            if(!mousewheel) mousewheel = false; else mousewheel = true;
            if(speed != ''){
                autoplay = true;
                autoplaytimeout = parseInt(speed, 10);
            }
            else autoplay = false;
            // Navigation
            if(nav) navigation = true;
            if(pag) pagination = true;
            var prev_text = '<i class="fa fa-angle-left"></i>';
            var next_text = '<i class="fa fa-angle-right"></i>';
            if(text_prev) prev_text = text_prev;
            if(text_next) next_text = text_next;
            if(itemres == '' || itemres === undefined){
                if(item == '1') itemres = '0:1,480:1,768:1,1200:1';
                if(item == '2') itemres = '0:1,480:1,768:2,1200:2';
                if(item == '3') itemres = '0:1,480:2,768:2,992:3';
                if(item == '4') itemres = '0:1,480:2,840:3,1200:4';
                if(item >= '5') itemres = '0:1,480:2,768:3,1024:4,1200:'+item;
            }
            console.log(itemres);
            itemres = itemres.split(',');
            var responsive = {};
            var i;
            for (i = 0; i < itemres.length; i++) {
                itemres[i] = itemres[i].split(':');
                var res_dv = {};
                res_dv.items = parseInt(itemres[i][1], 10);
                responsive[itemres[i][0]] = res_dv;
            }
            $(this).owlCarousel({
                items: item,
                margin: parseInt(margin, 10),
                loop: loop,
                stagePadding: parseInt(stage_padding, 10),
                startPosition: parseInt(start_position, 10),
                nav: navigation,
                navText: [prev_text,next_text],
                responsive: responsive,
                autoplay: autoplay,
                autoplayTimeout: autoplaytimeout,
                animateOut: animation_out,
                animateIn: animation_in,
                // onTranslated: afterAction,
                // onInitialize:background,
                dots: pagination,
                rewind: true,
            });
        });
    }
    $('.thucte-main').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.thucte-nav'
    });
    $('.thucte-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.thucte-main',
        arrows: false,
   //     dots: true,
    //    centerMode: true,
        focusOnSelect: true
    });

    $('.main-nav.main-nav3').find('.menu-btn').on("click",function (e) {
       e.preventDefault();
       var self = $(this);
       self.parents('.main-nav.main-nav3').toggleClass('active');
    });



    $('.dang_ky_btn').on("click",function(){
        $.fancybox.close();
    });
});

$(window).on("load",function () {

});

$(window).on("resize",function () {

});