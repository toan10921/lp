$(document).ready(function () {
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
});