$(document).ready(function () {



    $('.owl-carousel').owlCarousel();


    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 200) {
            
            $("#navbar").removeClass('bg-light').css({'backgroundColor': 'white', 'color': '#28a745'});
            $('#nav-tabs-outer').addClass('fixed').css('top', '56px');
    
        }else {
            $("#navbar").addClass('bg-light').removeClass('fixed');
        }
    });




});