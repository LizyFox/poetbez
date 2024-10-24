$(document).ready(function() {
    $('.toggler-button').on('click', function () {
        $('.animated-icon').toggleClass('open');
        $('.top-menu__block').slideToggle("slow");
    });
});

