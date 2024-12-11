(function ($) {
    'use strict';

    // ----------------------------
    // AOS
    // ----------------------------
    AOS.init({
        once: true, disable: 'mobile',
    });


    $(document).ready(function () {

        // navbarDropdown
        if ($(window).width() < 992) {
            $('.main-nav .dropdown-toggle').on('click', function () {
                $(this).siblings('.dropdown-menu').animate({
                    height: 'toggle'
                }, 300);
            });
        }

        // -----------------------------
        //  Testimonial Slider
        // -----------------------------
        $('.testimonial-slider').slick({
            slidesToShow: 2,
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [{
                breakpoint: 991, settings: {
                    slidesToShow: 1, slidesToScroll: 1
                }
            }]
        });

        $('.gallery-slider').slick({
            slidesToShow: 3,
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [{
                breakpoint: 991, settings: {
                    slidesToShow: 1, slidesToScroll: 1
                }
            }]
        });


        // -----------------------------
        //  Count Down JS
        // -----------------------------
        var syoTimer = $('#simple-timer');
        if (syoTimer) {
            $('#simple-timer').syotimer({
                year: 2023, month: 9, day: 1, hour: 0, minute: 0
            });
        }


        // -----------------------------
        //  Story Slider
        // -----------------------------
        $('.about-slider').slick({
            slidesToShow: 1, infinite: true, arrows: false, autoplay: true, autoplaySpeed: 2000, dots: true
        });


        // -----------------------------
        //  Quote Slider
        // -----------------------------
        $('.quote-slider').slick({
            slidesToShow: 1, infinite: true, arrows: false, autoplay: true, autoplaySpeed: 2000, dots: true
        });


        // -----------------------------
        //  Client Slider
        // -----------------------------
        $('.client-slider').slick({
            slidesToShow: 4, infinite: true, arrows: false, // autoplay: true,
            autoplaySpeed: 2000, dots: true, responsive: [{
                breakpoint: 0, settings: {
                    slidesToShow: 1, slidesToScroll: 1
                }
            }, {
                breakpoint: 575, settings: {
                    slidesToShow: 2, slidesToScroll: 1
                }
            }, {
                breakpoint: 767, settings: {
                    slidesToShow: 2, slidesToScroll: 2
                }
            }, {
                breakpoint: 991, settings: {
                    slidesToShow: 3, slidesToScroll: 2
                }
            }]
        });

        // Переключение на авторизацию
        $('#authBtn').click(function () {
            $('#authForm').removeClass('d-none');
            $('#regForm').addClass('d-none');

            $('#authBtn').removeClass('badge-primary').addClass('badge-success')
            $('#regBtn').removeClass('badge-success').addClass('badge-primary')
        });

        // Переключение на регистрацию
        $('#regBtn').click(function () {
            $('#regForm').removeClass('d-none');
            $('#authForm').addClass('d-none');

            $('#authBtn').removeClass('badge-success').addClass('badge-primary')
            $('#regBtn').removeClass('badge-primary').addClass('badge-success')
        });

        // Переход на форму регистрации из авторизации
        $('#showRegister').click(function () {
            $('#regBtn').click();
        });

        // Переход на форму авторизации из регистрации
        $('#showAuth').click(function () {
            $('#authBtn').click();
        });


    });
})(jQuery);



