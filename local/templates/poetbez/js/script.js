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

/** Формы */
$(document).on('submit', '.form__question form', function(e) {
    e.preventDefault();

    // handleSubmit();

    let form = $(this).closest('form');
    let div = $(this).closest('.modal-body');
    let error = false;

    if (form.find('#ask-form_name').val() == '') {
        form.find('#ask-form_name').addClass('is-invalid');
        form.find('#ask-form_name').closest('.has-validation').find('.invalid-feedback').css('display', 'block');
        error = true;
    } else {
        form.find('#ask-form_name').removeClass('is-invalid');
        form.find('#ask-form_name').addClass('is-valid');
        form.find('#ask-form_name').closest('.has-validation').find('.invalid-feedback').css('display', 'none');
    }

    if (form.find('#ask-form_email').val() != '') {
        let reg = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
        let valid = reg.test(form.find('#ask-form_email').val());

        if (!valid) {
            form.find('#ask-form_email').addClass('is-invalid');
            form.find('#ask-form_email').closest('.has-validation').find('.invalid-feedback').css('display', 'block');
            error = true;
        } else {
            form.find('#ask-form_email').removeClass('is-invalid');
            form.find('#ask-form_email').addClass('is-valid');
            form.find('#ask-form_email').closest('.has-validation').find('.invalid-feedback').css('display', 'none');
        }
    } else {
        form.find('#ask-form_email').addClass('is-invalid');
        form.find('#ask-form_email').closest('.has-validation').find('.invalid-feedback').css('display', 'block');
    }

    if (form.find('#ask-form_question').val() == '') {
        form.find('#ask-form_question').addClass('is-invalid');
        form.find('#ask-form_question').closest('.has-validation').find('.invalid-feedback').css('display', 'block');
        error = true;
    } else {
        form.find('#ask-form_question').removeClass('is-invalid');
        form.find('#ask-form_question').addClass('is-valid');
        form.find('#ask-form_question').closest('.has-validation').find('.invalid-feedback').css('display', 'none');
    }

    if (!error) {
        /*$.ajax({
            url: '/local/templates/poetbez/ajax/forms.php',
            data: $(this).serialize(),
            type: 'POST',

            success: function (data) {*/
                function result() {
                    if (data == 'success') {
                        $('.modal-title').hide();
                        div.find('form').hide();
                        div.find('.form-success').show();
                    } else {
                        div.find('form').hide();
                        div.find('.order-block-fail').addClass('active');
                    }
                }

                setTimeout(result, 300);
            /*}
        });*/
    }
});
/** Формы */