$(document).ready(function () {
    // $('.owl-carousel').owlCarousel();

    var carousel = $(".owl-carousel");
    carousel.owlCarousel({
        items: 5,
        nav: true,
        dots: false,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 4],
        itemsTablet: [768, 3],
        itemsTabletSmall: false,
        itemsMobile: [479, 1]
    });

    // show add item button on each product

    $(".store-new-arrival .card").hover(function () {
        $(this).find(".item-add-btn").fadeIn();
        }
        , function () {
            $(this).find(".item-add-btn").fadeOut();
    });

});