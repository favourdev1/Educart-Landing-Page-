// Initializing AOS Library

AOS.init({
  
  });

//////////////////////////////

// Starting owl carousel
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        items: 3,
        loop: true,
        mouseDrag: false,
        dots: false,
        mouseWheel: true,
        autoplay: true,
        autoplayTimeout: 1000, // 1 seconds
        autoplaySpeed: 1000,
        itemsCustom: false,
        itemsDesktop: [1200, 3],
        itemsDesktopSmall: [992, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: [768, 1],
        itemsMobile: [479, 1],


        responsiveRefreshRate: 200,

    });
});
