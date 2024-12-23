$(document).ready(function () {
    /** Звезды в футере */
    const params = {
        amount: 200,
        size: {
            min: 1,
            max: 2,
            giant: 3
        },
        duration: {
            min: 10,
            max: 25,
        }
    }
    const randomBetween = (a, b) => {
        return (a + (Math.random() * (b - a)));
    }

    for (let i = 0; i < params.amount; i++) {
        let star = $("<div></div>");
        let size = Math.round(Math.random() * 10) === 0 ? params.size.giant : randomBetween(params.size.min, params.size.max);
        star.css({
            "width": size + "px",
            "height": size + "px",
            "left": randomBetween(0, 100) + "%",
            "top": randomBetween(0, 100) + "%",
            "box-shadow": "0 0 " + size + "px " + size / 2 + "px #043668",
            "animation-duration": randomBetween(params.duration.min, params.duration.max) + "s"
        });

        $(".under-footer_stars").append(star);
    }
    /** Звезды в футере */

});

