<?php
/*
Template Name: La mia Borsa

*/
?>

<?php
get_header();
?>

    <div class="la-mia-borsa">
        <section class="la-mia-borsa__image">
            <div class="la-mia-borsa__overlay-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/la-mia-borsa-icon.svg" alt="Иконка La mia Borsa" class="la-mia-borsa__icon" />
                <h1 class="la-mia-borsa__heading">La mia Borsa</h1>
                <p class="la-mia-borsa__subheading">Итальянские сумки в Санкт-Петербурге</p>
            </div>
        </section>
        <section class="about-la-mia-borsa">
            <h3 class="about-la-mia-borsa__heading">О ПРОЕКТЕ</h3>
            <div class="about-la-mia-borsa__container">
                <div class="about-la-mia-borsa__img"></div>
                <div class="about-la-mia-borsa__text-container">
                    <p class="about-la-mia-borsa__text">
                        La mia BORSA - розничный магазин сумок и аксессуаров из натуральной кожи,
                        а также интернет-магазин с возможностью доставки товара покупателю. В магазине
                        можно приобрести по&#8209;настоящему необычную сумку, а продавцы-консультанты
                        помогут Вам разобраться в ассортименте.
                    </p>
                    <p class="about-la-mia-borsa__text">
                        Цель компании – получение покупателем удовольствия от приобретения оригинальной
                        сумки из итальянской натуральной кожи. Компания гордимся тем, что клиенты возвращаются
                        к ним за новой покупкой, а также рекомендуют своим близким, друзьям и знакомым. Ведь это
                        лучшая оценка труда. При обновлении ассортимента, специалисты магазина изучают сумки,
                        тестируют их на предмет удобства переноски на плече, в руках, ощущения от прикосновения
                        к коже, а если это рюкзак, то насколько он удобен и функционален.
                    </p>
                </div>
            </div>
        </section>
        <?php include 'inc/section-stages.php' ?>
        <section class="colors">
            <div class="colors__main-container">
                <h3 class="colors__heading">ЦВЕТА И ИКОНКИ</h3>
                <div class="colors__content-container">
                    <div class="colors__container">
                        <div class="colors__square-container">
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_dark-grey"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#242424</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_violet"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#4F275B</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_blue"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#00ACEE</p>
                                </div>
                            </div>
                        </div>
                        <div class="colors__rectangle-group">
                            <div class="colors__rectangle colors__rectangle_dirty-red"></div>
                            <div class="colors__type-container">
                                <p class="colors__type">#831A35</p>
                            </div>
                        </div>
                    </div>
                    <div class="colors__icon-container">
                        <div class="colors__ferst-container colors__first-container_la-mia-borsa">
                            <img class="colors__icon colors__icon_call-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/call-center-icon.jpg" alt="Иконка Колл Цента"/>
                            <img class="colors__icon colors__icon_first-bag" src="<?php echo get_template_directory_uri(); ?>/assets/images/first-bag-icon.jpg" alt="Иконка сумки"/>
                        </div>
                        <div class="colors__second-container colors__second-container_la-mia-borsa">
                            <img class="colors__icon colors__icon_best" src="<?php echo get_template_directory_uri(); ?>/assets/images/best-icon.jpg" alt="Иконка награды"/>
                            <img class="colors__icon colors__icon_second-bag" src="<?php echo get_template_directory_uri(); ?>/assets/images/second-bag-icon.jpg" alt="Иконка сумки"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="typography">
            <h3 class="typography__header">ТИПОГРАФИКА</h3>
            <div class="typography__container">
                <p class="typography__letter-main">Aa</p>
                <div class="typography__roboto-container">
                    <h5 class="typography__roboto-heading">Roboto</h5>
                    <p class="typography__roboto-letters">Aa Bb Cc Dd Ee Ff Gg Hh Ii Kk Ll Mm Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy and Zz</p>
                    <p class="typography__roboto-letters">Aa Бб Вв Гг Дд Ее Ёё Жж Зз Ии Йй Кк Лл Мм Нн Оо Пп Рр Сс Тт Уу Фф Хх Цц Чч Шш Щщ Ъ Ы Ь Ээ Юю Яя</p>
                </div>
            </div>
        </section>
        <section class="adaptive-la-mia-borsa">
            <img class="adaptive-la-mia-borsa__phones-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/iphones.svg" alt="Картинка телефонов"/>
            <div class="adaptive-la-mia-borsa__info-container">
                <h3 class="adaptive-la-mia-borsa__heading">АДАПТИВНЫЙ ДИЗАЙН</h3>
                <p class="adaptive-la-mia-borsa__description">
                    Все наши сайты можно просматривать на самых разных устройствах,
                    таких как смартфон, планшет, ноутбук и т.д., независимо от разрешения экрана.
                    Все элементы интерфейса одинаково удобны для всех устройств и их пользователей,
                    например, пользователям мобильных устройств не нужно приближать кнопку на сайте,
                    чтобы не промахнуться мимо нужной ссылки.
                </p>
            </div>
        </section>
        <div class="preview-la-mia-borsa">
            <img class="preview-la-mia-borsa__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/la-mia-borsa-img-preview.jpg" alt="Превью Ля Миа Борса"/>
        </div>
    </div>


<?php
get_footer();
