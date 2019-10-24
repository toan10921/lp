
"use strict"; // Start of use strict

$(document).ready(function () {
    if($(".js_banner-slider").length > 0){
        $(".js_banner-slider").each(function () {
            $(this).owlCarousel({
                items: 1,
                nav: true,
                loop: true,
                // animateIn: "fadeIn",
                // animateOut: "fadeOut"
            });
        });
    }
});
$(document).on("load",function () {

});
// $(document).load(function () {
//
// });
