//=include ./module/include.js

$(document).ready(function () {
    let swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 60,
        centeredSlides: true,
        loop: true,
        // autoplay: {
        //     delay: 1500,
        //     disableOnInteraction: false,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            279: {
                slidesPerView: 1,
                spaceBetween: 5
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            '@0.75': {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            '@1.00': {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            '@1.50': {
                slidesPerView: 3,
                spaceBetween: 50,
            }
        }
    });
    const swiperPrev = document.getElementById('swiperPrev');
    const swiperNext = document.getElementById('swiperNext');

    swiperPrev.addEventListener('click', () => {
        swiper.slidePrev();
    });
    swiperNext.addEventListener('click', () => {
        swiper.slideNext();
    });
});




$(document).ready(function () {
    $('.accordion__text').hide();
    $('.accordion__link').click(function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('active').siblings().removeClass('active');
        $('.accordion__text').slideUp();
        if (!$(this).next().is(':visible')) {
            $(this).next().slideDown();
        }
    });

    var accordion = (function (element) {
        var _getItem = function (elements, className) { // функция для получения элемента с указанным классом
            var element = undefined;
            elements.forEach(function (item) {
                if (item.classList.contains(className)) {
                    element = item;
                }
            });
            return element;
        };
        return function () {
            var _mainElement = {}, // .accordion
                _items = {}, // .accordion-item
                _contents = {}; // .accordion-item-content
            var _actionClick = function (e) {
                    if (!e.target.classList.contains('accordion-item-header')) { // прекращаем выполнение функции если кликнули не по заголовку
                        return;
                    }
                    e.preventDefault(); // отменям стандартное действие
                    // получаем необходимые данные
                    var header = e.target,
                        item = header.parentElement,
                        itemActive = _getItem(_items, 'show');
                    if (itemActive === undefined) { // добавляем класс show к элементу (в зависимости от выбранного заголовка)
                        item.classList.add('show');
                    } else {
                        // удаляем класс show у ткущего элемента
                        itemActive.classList.remove('show');
                        // если следующая вкладка не равна активной
                        if (itemActive !== item) {
                            // добавляем класс show к элементу (в зависимости от выбранного заголовка)
                            item.classList.add('show');
                        }
                    }
                },
                _setupListeners = function () {
                    // добавим к элементу аккордиона обработчик события click
                    _mainElement.addEventListener('click', _actionClick);
                };

            return {
                init: function (element) {
                    _mainElement = (typeof element === 'string' ? document.querySelector(element) : element);
                    _items = _mainElement.querySelectorAll('.accordion-item');
                    _setupListeners();
                }
            }
        }
    })();

    var accordion1 = accordion();
    accordion1.init('#accordion');

    $('.video__item, .video').parent().click(function () {

        if ($(this).children(".video__item, .video").get(0).paused) {
            $(this).children(".video__item, .video").get(0).play();
            $(this).children(".play, .play__acc").fadeOut();

        } else {
            $(this).children(".video__item, .video").get(0).pause();

            $(this).children(".play, .play__acc").fadeIn();

        }

    });

    $('.menu__link').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('active')
            .siblings().removeClass('active');
    });


});


$(document).ready(function () {
    // $.validator.addMethod('date', function(value, element, param) {
    //     return (value != 0) && (value <= 31) && (value == parseInt(value, 10));
    // }, 'Пожалуйста введите корректную дату!');
    // $.validator.addMethod('month', function(value, element, param) {
    //     return (value != 0) && (value <= 12) && (value == parseInt(value, 10));
    // }, 'Please enter a valid month!');
    // $.validator.addMethod('year', function(value, element, param) {
    //     return (value != 0) && (value >= 1900) && (value == parseInt(value, 10));
    // }, 'Please enter a valid year not less than 1900!');
    // $.validator.addMethod('username', function (value, element, param) {
    //     var nameRegex = /^[a-zA-Z0-9]+$/;
    //     return value.match(nameRegex);
    // }, 'Only a-z, A-Z, 0-9 characters are allowed');

    var val = {
        // Specify validation rules
        rules: {
            fname: "required",
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 7,
                maxlength: 10,
                digits: true
            },
            date: {
                date: true,
                required: true,
                minlength: 8,
                maxlength: 10,
                digits: false,
            },
            username: {
                username: true,
                required: true,
                minlength: 4,
                maxlength: 16,
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 16,
            },
            repeat_password: {
                required: true,
                minlength: 8,
                maxlength: 16,
            }
        },
        // Specify validation error messages
        messages: {
            fname: "Это поле обязательно для заполнения",
            lname: "Это поле обязательно для заполнения",
            email: {
                required: "Это поле обязательно для заполнения",
                email: "Введите корректный Email",
            },
            phone: {
                required: "Это поле обязательно для заполнения",
                minlength: "Пожалуйста введите минимум 7 цифр",
                maxlength: "Пожалуйста введите максимум 10 цифр",
                digits: "Допустимы только цифры"
            },
            date: {
                required: "Это поле обязательно для заполнения",
                minlength: "Date should be a 2 digit number, e.i., 01 or 20",
                maxlength: "Date should be a 2 digit number, e.i., 01 or 20",
                // digits:     "Date should be a number"
            },
            username: {
                required: "Username is required",
                minlength: "Username should be minimum 4 characters",
                maxlength: "Username should be maximum 16 characters",
            },
            password: {
                required: "Это поле обязательно для заполнения",
                minlength: "Пожалуйста введите минимум 8 символов",
                maxlength: "Пожалуйста введите минимум 16 символов",
            },
            repeat_password: {
                required: "Это поле обязательно для заполнения",
                minlength: "Пожалуйста введите минимум 8 символов",
                maxlength: "Пожалуйста введите минимум 16 символов",
            }

        }
    }


    $("#myForm").multiStepForm(
        {
            defaultStep: 0,
            beforeSubmit: function (form, submit) {
                console.log("called before submiting the form");
                console.log(form);
                console.log(submit);
            },
            validations: val,
        }
    ).navigateTo(0);
});

(function ($) {
    $.fn.multiStepForm = function (args) {
        if (args === null || typeof args !== 'object' || $.isArray(args))
            throw  " : Called with Invalid argument";
        var form = this;
        var tabs = form.find('.tab');
        var steps = form.find('.step');
        steps.each(function (i, e) {
            $(e).on('click', function (ev) {
            });
        });
        form.navigateTo = function (i) {/*index*/
            /*Mark the current section with the class 'current'*/
            tabs.removeClass('current').eq(i).addClass('current');
            // Show only the navigation buttons that make sense for the current section:
            form.find('.previous').toggle(i > 0);
            atTheEnd = i >= tabs.length - 1;
            form.find('.next').toggle(!atTheEnd);
            // console.log('atTheEnd='+atTheEnd);
            form.find('.submit').toggle(atTheEnd);
            fixStepIndicator(curIndex());
            return form;
        }

        function curIndex() {
            /*Return the current index by looking at which section has the class 'current'*/
            return tabs.index(tabs.filter('.current'));
        }

        function fixStepIndicator(n) {
            steps.each(function (i, e) {
                // if (i === n) {
                //     $(e).addClass('active');
                // }
                i === n ? $(e).addClass('active') : $(e).removeClass('active');
            });
        }

        /* Previous button is easy, just go back */
        form.find('.previous').click(function () {
            form.navigateTo(curIndex() - 1);
        });

        /* Next button goes forward iff current block validates */
        form.find('.next').click(function () {
            if ('validations' in args && typeof args.validations === 'object' && !$.isArray(args.validations)) {
                if (!('noValidate' in args) || (typeof args.noValidate === 'boolean' && !args.noValidate)) {
                    form.validate(args.validations);
                    if (form.valid() === true) {
                        form.navigateTo(curIndex() + 1);
                        return true;
                    }
                    return false;
                }
            }
            form.navigateTo(curIndex() + 1);
        });

        form.find('.submit').on('click', function (e) {
            if (typeof args.beforeSubmit !== 'undefined' && typeof args.beforeSubmit !== 'function')
                args.beforeSubmit(form, this);
            /*check if args.submit is set false if not then form.submit is not gonna run, if not set then will run by default*/
            if (typeof args.submit === 'undefined' || (typeof args.submit === 'boolean' && args.submit)) {
                form.submit();
            }
            return form;
        });
        /*By default navigate to the tab 0, if it is being set using defaultStep property*/
        typeof args.defaultStep === 'number' ? form.navigateTo(args.defaultStep) : null;
        form.noValidate = function () {

        }
        return form;
    };
}(jQuery));

$(document).ready(function () {
// Popup с номером телефона
    $('.header__phone_link').on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('.popup').slideToggle(300);
    });

    $('html').on('click', function (e) {
        $('.popup').hide(300);
    });

    $('#a4').on('click', function (e) {
        e.preventDefault();
        $('.search').show(300);
    });
});

// vertical slider codes
// let swiper3 = new Swiper(".swiper-container-directions", {
//     direction: "vertical",
//     effect: 'slide',
//     freeMode: true,
//     speed: 1500,
//     allowTouchMove: false,
//     loop: true,
//     autoplay: {
//         delay: 1000,
//         disableOnInteraction: true,
//     },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//
// });
//
// const verticalSwiperPrev = document.getElementById('verticalSwiperPrev')
// const verticalSwiperNext = document.getElementById('verticalSwiperNext')
//
// verticalSwiperPrev.addEventListener('click', () => {
//     swiper3.slidePrev();
// });
// verticalSwiperNext.addEventListener('click', () => {
//     swiper3.slideNext();
// });

$(function () {
    $('.slick-slider-directions').slick({
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 1,
        speed: 1100,
        slidesToScroll: 1,
        // arrows: true,
        // prevArrow: '<button class="vertical-swiper__prev" id="verticalSwiperPrev"><img src="../assets/img/vertical-prev.svg" alt=""></button>',
        // nextArrow: '<button class="vertical-swiper__next" id="verticalSwiperNext"><img src="../assets/img/vertical-next.svg" alt=""></button>'
        prevArrow: $('.vprev'),
        nextArrow: $('.vnext')
    });
});

$(document).ready(function () {
    var rotate = 0;

    $('.vnext').click(function () {
        rotate = rotate + 45;
        $('.vertical-slide__img').css({
            "transform": "rotate(" + rotate + "deg)"
        });
    });

    $('.vprev').click(function () {
        rotate = rotate - 45;
        $('.vertical-slide__img').css({
            "transform": "rotate(" + rotate + "deg)"
        });
    });
});

let vnext = document.querySelector('.vnext');
vnext.addEventListener('click', () => {
    console.log('!!!');
});

