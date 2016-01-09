(function ($) {
    "use strict";

    ///////////////////////////////////////////////////// Your
    var venueAddress = "&nbsp;&nbsp;&nbsp;&nbsp;" + "10043 63 Avenue NW " + "<br>&nbsp;&nbsp;&nbsp;" + " Edmonton, AB"; // Venue
    /////////////////////////////////////////////////// Adress

    var fn = {

        // Launch Functions
        Launch: function () {
            fn.GoogleMaps();
            fn.MenuSticky();
            fn.MainSlider();
            fn.MainSliderAlign();
            fn.Navigation();
            fn.Slider();
            fn.Apps();
        },



        // Google Maps
        GoogleMaps: function () {

            var markerInfo = $("#map_canvas").gmap3({
                map: {
                    options: {
                        maxZoom: 14,
                        streetViewControl: false,
                        panControl: false,
                        panControlOptions: {
                            position: google.maps.ControlPosition.RIGHT_CENTER
                        },
                        zoomControl: false,
                        mapTypeControl: false,
						navigationControl: false,
						scaleControl: false,
						draggable: false,
						scrollwheel: false,
                    }
                },
                marker: {
                    address: venueAddress
                }
            },
                "autofit");
        },



        // Sticky Menu
        MenuSticky: function () {
            var menu = document.querySelector('#menu'),
                origOffsetY = menu.offsetTop + 100;
            function scroll() {
                if ($(window).scrollTop() >= origOffsetY) {
                    $('#menu').addClass('sticky');
                    $('#menu').removeClass('fixed');
                } else {
                    $('#menu').removeClass('sticky');
                    $('#menu').addClass('fixed');
                }
            }
            document.onscroll = scroll;
        },



        // Align Slider Horizontally
        MainSliderAlign: function () {
            var imageWidth, widthFix, container = $('.header-bg');
            function centerImage() {
                imageWidth = container.find('img').width();
                widthFix = imageWidth / 2;
                container.find('img').css('margin-left', -widthFix);
            }
            $(window).on("load resize", centerImage);
        },



        // Main FlexSlider
        MainSlider: function () {
            $(window).load(function () {
                $('.main-slider').flexslider({
                    noCSS: true,
                    touch: false,
                    controlNav: false,
                    directionNav: false,
                    animation: "fade",
                    start: function () {
                        $('#preloader').addClass('ready');
                    }
                });
            });
        },



        // One Page Navigation
        Navigation: function () {
            $('#menu').onePageNav({
                currentClass: 'current',
                scrollSpeed: 500,
                scrollOffset: 60,
                scrollThreshold: 0.2,
                easing: 'swing'
            });
        },



        // FlexSlider
        Slider: function () {
            $('.flexslider').flexslider({
                noCSS: true,
                touch: false,
                directionNav: false,
                animation: "fade"
            });
        },


        // Apps
        Apps: function () {
            // Go Top
            $('#gotop').click(function () {
                $('html, body').scrollTo($('#header'), 300);
            });

        }


    };

    $(document).ready(function () {
        fn.Launch();
    });

})(jQuery);



//BACK TO TOP

jQuery(document).ready(function($){
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if( $(this).scrollTop() > offset_opacity ) { 
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0 ,
            }, scroll_top_duration
        );
    });

});
