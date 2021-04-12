jQuery(function ($) {
    // /* SCROLL REVEAL
    // ----------------------------- */
    // var fadeIn = {
    //     duration: 1000,
    //     easing: 'linear',
    //     viewFactor: 0.5,
    //     interval: 300
    // };

    // var fadeInDelay = {
    //     duration: 1000,
    //     easing: 'linear',
    //     viewFactor: 0.5,
    //     interval: 300,
    //     delay: 600,
    //     interval: 300
    // };

    // var fadeUp = {
    //     distance: '20px',
    //     duration: 1000,
    //     easing: 'ease',
    //     viewFactor: 0.8,
    //     interval: 300
    // };

    // var fadeUpDelay = {
    //     distance: '20px',
    //     duration: 1000,
    //     easing: 'ease',
    //     viewFactor: 0.8,
    //     delay: 600,
    //     interval: 300
    // };

    // ScrollReveal().reveal('.fade-in', fadeIn);
    // ScrollReveal().reveal('.fade-in-delay', fadeInDelay);
    // ScrollReveal().reveal('.fade-up', fadeUp);
    // ScrollReveal().reveal('.fade-up-delay', fadeUpDelay);

    // /* HAMBURGER MENU */
    // function drawerClose() {
    //     $('#js-hamburger').attr('area-expanded', 'false');
    //     $('#js-header-nav').attr('area-hidden', 'true');
    // }

    // $('#js-hamburger').click(function() {
    //     $('body').toggleClass('is-drawerActive');

    //     if ($(this).attr('area-expanded') == 'false') {
    //         $(this).attr('area-expanded', 'true');
    //         $('#js-header-nav').attr('area-hidden', 'false');
    //     } else {
    //         drawerClose();
    //     }
    // });

    /* FAQ
    ----------------------------- */
    $('.faq__list .faq__item:first-of-type .faq__answer').show();
    $('.faq__list .faq__item:first-of-type span').html('－');

    $('.faq__question').click(function () {
        $answer = $(this).next();
        if ($answer.hasClass('is-open')) {
            $(this).children('span').html('＋');
            $answer.slideUp();
            $answer.removeClass('is-open');
        } else {
            $(this).children('span').html('－');
            $answer.addClass('is-open');
            $answer.slideDown();
        }
    });
});