$(document).ready(function() {
    $('.main-slider__block').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        items: 1,
        nav: true
    });

    // $(window).resize(function() {
    //     if ($(window).width() < 768) {
    //         $('.main-slider__img img').attr('data-fancybox', 'main-slider');
    //     } else {
    //         $('.main-slider__img img').removeAttr('data-fancybox');
    //     }
    // });

    // if ($(window).width() < 768) {
    //     $('.main-slider__img img').attr('data-fancybox', 'main-slider');
    // } else {
    //     $('.main-slider__img img').removeAttr('data-fancybox');
    // }
});