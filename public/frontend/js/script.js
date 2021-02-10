$(document).ready(function(){
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        (scroll > 0 ) ? $('header').addClass('scrolled') : $('header').removeClass('scrolled');
    });
    $('.intro .owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots:false,
        smartSpeed:500,
        responsive:{
            0:{
                items:1
            },
        }
    })
    $('.intro .next').click(function(){
        $('.intro .owl-carousel').trigger('next.owl.carousel');
    })
    $('.intro .prev').click(function(){
        $('.intro .owl-carousel').trigger('prev.owl.carousel');
    })
    $('header .menu-btn').click(function(){
        $('.mob-nav').toggleClass('active')
    });
})