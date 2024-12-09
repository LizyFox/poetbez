$(document).ready(function() {
    $('.event-detail__gallery').owlCarousel({
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
});