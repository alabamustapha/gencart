$(document).ready(function () {
    // $('.owl-carousel').owlCarousel();

    var carousel = $(".owl-carousel");
    carousel.owlCarousel({
        items: 5,
        nav: true,
        dots: false
    });

    // show add item button on each product

    $(".store-new-arrival .card").hover(function () {
        $(this).find(".item-add-btn").fadeIn();
        }
        , function () {
            $(this).find(".item-add-btn").fadeOut();
    });

});