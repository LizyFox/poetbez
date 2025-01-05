$(document).ready(function() {
    $('.news-detail__gallery').owlCarousel({
        loop: true,
        margin: 15,
        responsiveClass: true,
        items: 3,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });

    $('.news-another__items').owlCarousel({
        loop: true,
        margin: 24,
        responsiveClass: true,
        items: 4,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            575: {
                items: 2
            },
            991: {
                items: 3
            },
            1199: {
                items: 4
            }
        }
    });
});