<?php
/*
Template Name: ARbellos
*/
?>

<?php
get_header();
?>

    <div class="ar-bellos">
        <section class="ar-bellos__image">
            <div class="ar-bellos__overlay-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/arbellos-icon.svg" alt="Иконка Арбеллос" class="ar-bellos__icon" />
                <h1 class="ar-bellos__heading">ARbellos</h1>
                <p class="ar-bellos__subheading">Инсталяция светопрозрачных решений</p>
            </div>
        </section>
        <section class="about">
            <h3 class="about__heading">О ПРОЕКТЕ</h3>
            <div class="about__container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arbellos-about-img.jpg" alt="Фотография" class="about__img about__img_ar-bellos" />
                <div class="about__text-container about__text-container_ar-bellos">
                    <p class="about__subheading">
                        Компания Arbellos специализируется на инсталляции  интерьерных и
                        экстерьерных светопрозрачных систем, а так же на комплексном устройстве
                        оболочек зданий. Продукция компании Arbellos реализуется на всей
                        территории Российской Федерации и отвечает самым высоким стандартам с
                        точки зрения дизайна.
                    </p>
                    <p class="about__list-heading">Среди услуг компании:</p>
                    <ul class="about__list">
                        <li class="about__list-item">- лофт конструкции;</li>
                        <li class="about__list-item">- экстерьерное остекление;</li>
                        <li class="about__list-item">- интерьерное остекление;</li>
                        <li class="about__list-item">- фасады.</li>
                    </ul>
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
                                <div class="colors__square colors__square_black"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#111111</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_dark-grey"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#23282D</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_grey"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#8A8484</p>
                                </div>
                            </div>
                        </div>
                        <div class="colors__rectangle-group">
                            <div class="colors__rectangle colors__rectangle_light-grey"></div>
                            <div class="colors__type-container">
                                <p class="colors__type">#EAEAEA</p>
                            </div>
                        </div>
                    </div>
                    <div class="colors__icon-container">
                        <div class="colors__ferst-container colors__first-container_ar-bellos">
                            <img class="colors__icon colors__icon_hands" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/hands-icon-arbellos.svg" alt="Иконка рук"/>
                            <img class="colors__icon colors__icon_instagram" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/instagram-icon-arbellos.svg" alt="Иконка инстаграма"/>
                        </div>
                        <div class="colors__second-container colors__second-container_ar-bellos">
                            <img class="colors__icon colors__icon_question" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/question-icon.svg" alt="Иконка бумаги с линейкой"/>
                            <img class="colors__icon colors__icon_list" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/list-icon.svg" alt="Иконка награды"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="typography">
            <h3 class="typography__header">Типографика</h3>
            <div class="typography__container">
                <p class="typography__letter-main">Aa</p>
                <div class="typography__roboto-container">
                    <h5 class="typography__roboto-heading typography__roboto-heading_exo">Exo 2</h5>
                    <p class="typography__roboto-letters typography__roboto-letters_exo">Aa Bb Cc Dd Ee Ff Gg Hh Ii Jj Kk Ll Mm Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz</p>
                    <p class="typography__roboto-letters typography__roboto-letters_exo">Aa Бб Вв Гг Дд Ее Ёё Жж Зз Ии Йй Кк Лл Мм Нн Оо Пп Рр Сс Тт Уу Фф Хх Цц Чч Шш Щщ Ъ Ы Ь Ээ Юю Яя</p>
                </div>
            </div>
        </section>
        <section class="ar-bellos-adaptive">
            <div class="ar-bellos-adaptive__info-container">
                <h3 class="ar-bellos-adaptive__heading">Адаптивный дизайн</h3>
                <p class="ar-bellos-adaptive__description">
                    Все наши сайты можно просматривать на самых разных устройствах,
                    таких как смартфон, планшет, ноутбук и т.д., независимо от разрешения экрана.
                    Все элементы интерфейса одинаково удобны для всех устройств и их пользователей,
                    например, пользователям мобильных устройств не нужно приближать кнопку на сайте,
                    чтобы не промахнуться мимо нужной ссылки.
                </p>
            </div>
            <img class="ar-bellos-adaptive__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/white-laptop.svg" alt="Картинка ноутбука"/>
        </section>
        <div class="ar-bellos-preview">
            <img class="ar-bellos-preview__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ar-bellos-img-preview.jpg" alt="Изображение Арбеллос превью"/>
        </div>
    </div>

<?php
get_footer();

