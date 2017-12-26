$(document).ready(function () {
    // $('.owl-carousel').owlCarousel();

    var carousel = $(".owl-carousel");
    carousel.owlCarousel({
        nav: true,
        dots: false
    });
    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-prev").css({
        'z-index': '100',
        'border': '0px',
        'width': '48px',
        'height': '48px',
        'padding': '15px 7px',
        'border-radius': '50%',
        'box-shadow': 'rgba(0, 0, 0, 0.26) 0px 1px 2px 0px, rgba(0, 0, 0, 0.16) 0px 1px 4px 0px',
        'transition': 'opacity 200ms linear',
        'text-align': 'center',
        'line-height': '1',
        'background-color': 'rgb(60, 158, 38)',
'    color': 'rgb(255, 255, 255)',
        'position': 'absolute',
        'top': '83px',
        'display': 'block',
        'left': '8px',
        'right': '8px',
        'opacity': '1',
    });
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
    $(".owl-next").css({
        'z-index': '100',
        'border': '0px',
        'width': '48px',
        'height': '48px',
        'padding': '15px 7px',
        'border-radius': '50%',
        'box-shadow': 'rgba(0, 0, 0, 0.26) 0px 1px 2px 0px, rgba(0, 0, 0, 0.16) 0px 1px 4px 0px',
        'transition': 'opacity 200ms linear',
        'text-align': 'center',
        'line-height': '1',
        'background-color': 'rgb(67, 176, 42)',
        'color': 'rgb(255, 255, 255)',
        'position': 'absolute',
        'top': '83px',
        'display': 'block',
        'right': '8px',
        'opacity': '1'
    });


});