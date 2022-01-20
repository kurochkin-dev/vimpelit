<?php
/*
Template Name: СтройСнаб
*/
?>

<?php
get_header();
?>

    <div class="stroj-snab">
        <section class="stroj-snab__image">
            <div class="stroj-snab__overlay-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/stroi-snab-icon.svg" alt="Иконка Строй Снаб" class="stroj-snab__icon" />
                <h2 class="stroj-snab__heading">СтройСнаб</h2>
                <p class="stroj-snab__subheading">Компания осуществляет строительные работы</p>
            </div>
        </section>
        <section class="about">
            <h3 class="about__heading">О ПРОЕКТЕ</h3>
            <div class="about__container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stroi-snab-about-img.jpg" alt="Фотография" class="about__img" />
                <div class="about__text-container">
                    <p class="about__subheading">Компания «СтройСнаб» работает с 2010 года, и, судя по отзывам Заказчиков, уже заработала себе имя и положительную репутацию.</p>
                    <p class="about__list-heading">Основными видами деятельности компании являются:</p>
                    <ul class="about__list">
                        <li class="about__list-item">- кровельные работы;</li>
                        <li class="about__list-item">- фасадные работы;</li>
                        <li class="about__list-item">- очистка кровель от снега и наледи;</li>
                        <li class="about__list-item">- ремонт крылец;</li>
                        <li class="about__list-item">- устройство и ремонт отмосток;</li>
                        <li class="about__list-item">- внутренний ремонт помещений и парадных;</li>
                        <li class="about__list-item">- сантехнические работы;</li>
                        <li class="about__list-item">- асфальтирование;</li>
                        <li class="about__list-item">- благоустройство территорий.</li>
                    </ul>
                </div>
            </div>
        </section>
        <?php include 'section-stages.php'?>
        <section class="colors">
            <div class="colors__main-container">
                <h3 class="colors__heading">ЦВЕТА И ИКОНКИ</h3>
                <div class="colors__content-container">
                    <div class="colors__container">
                        <div class="colors__square-container">
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_gradient"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#FFC300</p>
                                    <p class="colors__type">#FF7304</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_black"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#030303</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_yellow"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#FFC300</p>
                                </div>
                            </div>
                        </div>
                        <div class="colors__rectangle-group">
                            <div class="colors__rectangle"></div>
                            <div class="colors__type-container">
                                <p class="colors__type">#FA903C</p>
                            </div>
                        </div>
                    </div>
                    <div class="colors__icon-container">
                        <div class="colors__ferst-container">
                            <img class="colors__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/money-icon.svg" alt="Иконка денег"/>
                            <img class="colors__icon colors__icon_sun" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/sun-icon.svg" alt="Иконка солнца"/>
                        </div>
                        <div class="colors__second-container">
                            <img class="colors__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/calendar-icon.svg" alt="Иконка календаря"/>
                            <img class="colors__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/hands-icon.svg" alt="Иконка рук"/>
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
        <section class="adaptive">
            <div class="adaptive__info-container">
                <h3 class="adaptive__heading">АДАПТИВНЫЙ ДИЗАЙН</h3>
                <p class="adaptive__description">
                    Все наши сайты можно просматривать на самых разных устройствах,
                    таких как смартфон, планшет, ноутбук и т.д., независимо от разрешения экрана.
                    Все элементы интерфейса одинаково удобны для всех устройств и их пользователей,
                    например, пользователям мобильных устройств не нужно приближать кнопку на сайте,
                    чтобы не промахнуться мимо нужной ссылки.
                </p>
            </div>
            <div class="adaptive__shadow"></div>
            <img class="adaptive__phones-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/phones-img.svg" alt="Картинка телефонов"/>
        </section>
        <div class="preview">
            <div class="preview__container">
                <img class="preview__img-one" src="<?php echo get_template_directory_uri(); ?>/assets/images/stroy-snab-1-img.jpg" alt="Изображение сайта"/>
                <img class="preview__img-two" src="<?php echo get_template_directory_uri(); ?>/assets/images/stroy-snab-2-img.jpg" alt="Изображение сайта"/>
            </div>
            <img class="preview__img-three" src="<?php echo get_template_directory_uri(); ?>/assets/images/stroy-snab-3-img.jpg" alt="Изображение сайта"/>
        </div>
    </div>

<?php
get_footer();
