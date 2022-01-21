'use strict';

// слайдер
$(document).ready(function () {
    $('.portfolio-slider__wrap').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: "<img src='http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/svg/prev-arrow.svg' class='prev' alt='1'>",
        nextArrow: "<img src='http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/svg/next-arrow.svg' class='next' alt='2'>",
        swipe: false,
        responsive: [
            {
                breakpoint: 1760,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1380,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 1,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "90px",
                }
            },
            {
                breakpoint: 718,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "90px",
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "120px",
                }
            },
            {
                breakpoint: 510,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "100px",
                }
            },
            {
                breakpoint: 470,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "85px",
                }
            },
            {
                breakpoint: 440,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "65px",
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "50px",
                }
            },
            {
                breakpoint: 370,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "35px",
                }
            },
            {
                breakpoint: 340,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "30px",
                }
            },
            {
                breakpoint: 330,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "25px",
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "20px",
                }
            },
            {
                breakpoint: 310,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true,
                    // className: "center",
                    centerMode: true,
                    centerPadding: "15px",
                }
            },
        ]
    });
});

// меню в хедере
$(document).ready(function () {
    $('.menu-item-535, .menu-item-536, .menu-item-537, .menu-item-528, .menu-item-527, .menu-item-529, .menu-item-518').wrapAll('<div class="drop-down-menu__container">');
    $('.menu-item-538, .menu-item-539, .menu-item-540').wrapAll('<div class="drop-down-menu__container">');
    $('.menu-item-524, .menu-item-532').wrap('<div class="drop-down-menu-portfolio__container">');
    $('.menu-item-523, .menu-item-531').wrap('<div class="drop-down-menu-portfolio__container drop-down-menu-portfolio__container_it">');
});

// мобильное меню
$(document).ready(function () {
    $('.menu-item-543 a').attr('id', 'it-service').addClass('mobile-navigation__links mobile-navigation__links_menu');
    $('.menu-item-543 .sub-menu').wrapAll('<div class="drop-down__block it-service">');
    $('.drop-down__block .sub-menu').addClass('navigation__list navigation__list-dropdown');

    $('.menu-item-546 a').attr('id', 'web-studio').addClass('mobile-navigation__links mobile-navigation__links_menu');
    $('.menu-item-546 .sub-menu').wrapAll('<div class="drop-down__block web-studio">');
    $('.drop-down__block .sub-menu').addClass('navigation__list navigation__list-dropdown');

    $('.menu-item-554 a').attr('id', 'portfolio').addClass('mobile-navigation__links mobile-navigation__links_menu');
    $('.menu-item-554 .sub-menu').wrapAll('<div class="drop-down__block portfolio">');
    $('.drop-down__block .sub-menu').addClass('navigation__list navigation__list-dropdown');

    $('.menu-item-557 a').attr('id', 'priceService').addClass('mobile-navigation__links mobile-navigation__links_menu');
    $('.menu-item-557 .sub-menu').wrapAll('<div class="drop-down__block price-service">');
    $('.drop-down__block .sub-menu').addClass('navigation__list navigation__list-dropdown');
});

// смена изображений с анимацией при наведении по дата-атрибуту
$(document).ready(function () {
    $('.animation-table__text_links').hover(
        function () {
            let linkFile = $(this).attr("data-filename");
            let linkServer = $(this).attr("data-server");
            let linkOneC = $(this).attr("data-one-c");
            let linkPhone = $(this).attr("data-phone");
            let linkUser = $(this).attr("data-user");
            $('.animation-table-it__img_desktop').attr('src', linkFile);
            $('.animation-table-it__img_desktop').animate({'opacity': 1}, 400);
            $('.animation-table-it__img-left-direction_default-server').attr('src', linkServer);
            $('.animation-table-it__img-left-direction_default-server').animate({'opacity': 1}, 400);
            $('.animation-table-it__img_default-administrate').attr('src', linkOneC);
            $('.animation-table-it__img_default-administrate').animate({'opacity': 1}, 400);
            $('.animation-table-it__img-left-direction_phone-default').attr('src', linkPhone);
            $('.animation-table-it__img-left-direction_phone-default').animate({'opacity': 1}, 400);
            $('.animation-table-it__img_default-user').attr('src', linkUser);
            $('.animation-table-it__img_default-user').animate({'opacity': 1}, 400);
        },
        function () {
            $('.animation-table-it__img_desktop').attr('src', 'http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/desktop-it.jpg');
            $('.animation-table-it__img_desktop').animate({'opacity': 0}, 400);
            $('.animation-table-it__img-left-direction_default-server').attr('src', 'http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/default-server.jpg');
            $('.animation-table-it__img-left-direction_default-server').animate({'opacity': 0}, 400);
            $('.animation-table-it__img_default-administrate').attr('src', 'http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/1-c-default.jpg');
            $('.animation-table-it__img_default-administrate').animate({'opacity': 0}, 400);
            $('.animation-table-it__img-left-direction_phone-default').attr('src', 'http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/phone-default.jpg');
            $('.animation-table-it__img-left-direction_phone-default').animate({'opacity': 0}, 400);
            $('.animation-table-it__img_default-user').attr('src', 'http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/user-default.jpg');
            $('.animation-table-it__img_default-user').animate({'opacity': 0}, 400);
        }
    );
});

// смена изображений с анимацией при наведении по дата-атрибуту
$(document).ready(function () {
    $('.design__body-text').hover(
        function () {
            let linkTable = $(this).attr('data-table');
            $('.animation__img').attr('src', linkTable);
            $('.animation__img').animate({'opacity': 1}, 400);
        },
        function () {
            $('.animation__img').attr('src', 'http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/animation-main.jpg');
            $('.animation__img').animate({'opacity': 0}, 400);
        }
    );
});

// смена текста и его цвета при наведении
$(document).ready(function () {
    $(".design__body-text").on('mouseover', function () {
            let text = $(this).html();
            $(".animation__text").html(text).show();
            let colors = ['#05d0df', '#F9461F', '#012255', '#DB73FB', '#56C57C'];
            $('.animation__text').css('color', () => colors.splice(Math.random() * colors.length | 0, 1)[0]);
        }
    );
});

// открытие мобильного меню при клике на иконку бургер
$(document).ready(function () {
    $(".mobile-header__menu-button").click(function () {
        let mobileNav = $('.mobile-navigation');
        let mobileBtn = $('.mobile-header__menu-button');
        mobileNav.toggleClass('mobile-navigation_opened');
    });
});

// смена иконки бургер/крестик при открытии/закрытии
$(document).ready(function () {
    $(".mobile-header__menu-button").bind("click", function () {
        let src = ($(this).attr("src") === "http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/svg/burger-menu-button.svg")
            ? "http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/svg/mobile-navigation-close-button.svg"
            : "http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/svg/burger-menu-button.svg";
        $(this).attr("src", src);
    });
});

// выделение активной карточки товара
const cardsShop = document.querySelectorAll(".card-shop");
const cardShop = document.querySelector('.card-shop');
if (cardShop) {
    cardShop.classList.add('active');
}

for (let shop of cardsShop) {
    shop.addEventListener("click", function () {
        for (let shop of cardsShop) {
            shop.classList.remove('active');
        }
        this.classList.add('active');
    });
}

// выделение активной карточки товара
const priceTableLanding = document.querySelectorAll('.price-table__section-landing');
const priceTableLand = document.querySelector('.price-table__section-landing');
if (priceTableLand) {
    priceTableLand.classList.add('active');
}
for (let table of priceTableLanding) {
    table.addEventListener("click", function () {
        for (let table of priceTableLanding) {
            table.classList.remove('active');
        }
        this.classList.add('active');
    });
}

const priceTableSeo = document.querySelectorAll('.price-table__section-seo');
const priceTableS = document.querySelector('.price-table__section-seo');
if (priceTableS) {
    priceTableS.classList.add('active');
}

for (let table of priceTableSeo) {
    table.addEventListener("click", function () {
        for (let table of priceTableSeo) {
            table.classList.remove('active');
        }
        this.classList.add('active');
    });
}

const priceTableBusiness = document.querySelectorAll('.price-table__section-business');
const priceTableBus = document.querySelector('.price-table__section-business');
if (priceTableBus) {
    priceTableBus.classList.add('active');
}
for (let table of priceTableBusiness) {
    table.addEventListener("click", function () {
        for (let table of priceTableBusiness) {
            table.classList.remove('active');
        }
        this.classList.add('active');
    });
}

const priceTableMultiPage = document.querySelectorAll('.price-table__section-multipage');
const priceTableMulti = document.querySelector('.price-table__section-multipage');
if (priceTableMulti) {
    priceTableMulti.classList.add('active');
}

for (let table of priceTableMultiPage) {
    table.addEventListener("click", function () {
        for (let table of priceTableMultiPage) {
            table.classList.remove('active');
        }
        this.classList.add('active');
    });
}

// при клике на кнопки открытие попап формы обратной связи
$(document).ready(function () {
    $('.header-info__button, .it__button, .web__button, .price-web__button, .price-it__button, .shop__button, .landing__button, .business-card__button, .multipage__button, .catalog__button, .seo__button').click(function () {
        $('.popup').addClass('popup_opened');
    });
});

// закрытие модального окна при клике на крестик
$(document).ready(function () {
    $('.popup__close-button').click(function () {
        $('.popup').removeClass('popup_opened');
    });
});


//при открытии формы из хедера на маленьком разрешении сворачивается меню и меняется кнопка закрытия на бургер
$(document).ready(function () {
    if (document.documentElement.clientWidth < 931) {
        $('.mobile-navigation__button').click(function () {
            $('.mobile-navigation').removeClass('mobile-navigation_opened');
            $('.popup').addClass('popup_opened');

            let src = ($('.mobile-header__menu-button').attr("src") === "http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/svg/mobile-navigation-close-button.svg")
                ? "http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/svg/burger-menu-button.svg"
                : "http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/svg/mobile-navigation-close-button.svg";
            $('.mobile-header__menu-button').attr("src", src);

        });
    }
});


//мобильное меню
window.onload = () => {
    $('.web-studio, .it-service, .portfolio, .price-service').hide();
    let itService = document.querySelector('#it-service');
    let webStudio = document.querySelector('#web-studio');
    let portfolio = document.querySelector('#portfolio');
    let priceService = document.querySelector('#priceService');

    if (itService) {
        itService.addEventListener('click', (e) => {
            e.preventDefault();
            let el = document.querySelector('.it-service');
            el.style.display === 'none' ? el.style.display = 'flex' : el.style.display = 'none';
        });
    }
    if (webStudio) {
        webStudio.addEventListener('click', (e) => {
            e.preventDefault();
            let el = document.querySelector('.web-studio');
            el.style.display === 'none' ? el.style.display = 'flex' : el.style.display = 'none';
        });
    }
    if (portfolio) {
        portfolio.addEventListener('click', (e) => {
            e.preventDefault();
            let el = document.querySelector('.portfolio');
            el.style.display === 'none' ? el.style.display = 'flex' : el.style.display = 'none';
        });
    }
    if (priceService) {
        priceService.addEventListener('click', (e) => {
            e.preventDefault();
            let el = document.querySelector('.price-service');
            el.style.display === 'none' ? el.style.display = 'flex' : el.style.display = 'none';
        });
    }
};

// обертка для уведомления у формы обратной связи
$(document).ready(function () {
    $('.wpcf7-response-output').wrap('<div class="wrap-output">');
});

$('button').click(function () {
    let titlePage = $('.page-form').attr('data-page-title');
    $('#hidden').val(titlePage);
    console.log(titlePage);
});

// маска ввода номера телефона
[].forEach.call(document.querySelectorAll('input[name="phone"]'), function (e) {
    var t;

    function a(e) {
        e.keyCode && (t = e.keyCode), this.selectionStart < 3 && e.preventDefault();
        var a = "+7 (___) ___-__-__", n = 0, c = a.replace(/\D/g, ""), o = this.value.replace(/\D/g, ""),
            s = a.replace(/[_\d]/g, function (e) {
                return n < o.length ? o.charAt(n++) || c.charAt(n) : e
            });
        -1 != (n = s.indexOf("_")) && (n < 5 && (n = 3), s = s.slice(0, n));
        var l = a.substr(0, this.value.length).replace(/_+/g, function (e) {
            return "\\d{1," + e.length + "}"
        }).replace(/[+()]/g, "\\$&");
        (!(l = new RegExp("^" + l + "$")).test(this.value) || this.value.length < 5 || t > 47 && t < 58) && (this.value = s), "blur" == e.type && this.value.length < 5 && (this.value = "")
    }

    e.addEventListener("input", a, !1), e.addEventListener("focus", a, !1), e.addEventListener("blur", a, !1)
});
