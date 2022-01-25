<?php
/*
Template Name: Волекс абразив
*/
?>

<?php
get_header();
?>

    <div class="voleks">
        <section class="voleks__image">
            <div class="voleks__overlay-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/voleks-icon.svg" alt="Иконка Строй Снаб" class="voleks__icon" />
                <h1 class="voleks__heading">Волекс абразив</h1>
                <p class="voleks__subheading">Продажа инструмента и абразивных материалов</p>
            </div>
        </section>

        <section class="about">
            <h3 class="about__heading">О проекте</h3>
            <div class="about__container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/voleks-about-img.jpg" alt="Фотография" class="about__img about__img_voleks" />
                <div class="about__text-container">
                    <p class="about__subheading">Компания Волекс абразив занимается продажей промышленного инструмента Dynabrade и абразивных материалов 3M.</p>
                    <p class="about__list-heading">Среди ассортимента компании:</p>
                    <ul class="about__list">
                        <li class="about__list-item">- электроинструмент;</li>
                        <li class="about__list-item">- станки и оборудование;</li>
                        <li class="about__list-item">- средства индивидуальной защиты;</li>
                        <li class="about__list-item">- борфрезы;</li>
                        <li class="about__list-item">- пневмоинструмент;</li>
                        <li class="about__list-item">- электроинструмент;</li>
                        <li class="about__list-item">- ленто-шлифовальные станки;</li>
                        <li class="about__list-item">- асфальтирование;</li>
                        <li class="about__list-item">- благоустройство территорий.</li>
                    </ul>
                </div>
            </div>
        </section>
        <?php include 'inc/section-stages.php' ?>
        <section class="colors">
            <div class="colors__main-container">
                <h3 class="colors__heading">Цвета и иконки</h3>
                <div class="colors__content-container">
                    <div class="colors__container">
                        <div class="colors__square-container">
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_blue"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#229DE0</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_red"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#FF2938</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_black"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#030303</p>
                                </div>
                            </div>
                        </div>
                        <div class="colors__rectangle-group">
                            <div class="colors__rectangle colors__rectangle_pink"></div>
                            <div class="colors__type-container">
                                <p class="colors__type">#EC555F</p>
                            </div>
                        </div>
                    </div>
                    <div class="colors__icon-container">
                        <div class="colors__ferst-container colors__ferst-container_voleks">
                            <img class="colors__icon colors__icon_certificate" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/certificate-icon.svg" alt="Иконка сертификата"/>
                            <img class="colors__icon colors__icon_paper" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/paper-icon.svg" alt="Иконка бумаги"/>
                        </div>
                        <div class="colors__second-container colors__second-container_voleks">
                            <img class="colors__icon colors__icon_paper-numbers" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/paper-numbers-icon.svg" alt="Иконка бумаги с линейкой"/>
                            <img class="colors__icon colors__icon_award" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/award-icon.svg" alt="Иконка награды"/>
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
                    <h4 class="typography__roboto-heading">Roboto</h4>
                    <p class="typography__roboto-letters">Aa Bb Cc Dd Ee Ff Gg Hh Ii Kk Ll Mm Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy and Zz</p>
                    <p class="typography__roboto-letters">Aa Бб Вв Гг Дд Ее Ёё Жж Зз Ии Йй Кк Лл Мм Нн Оо Пп Рр Сс Тт Уу Фф Хх Цц Чч Шш Щщ Ъ Ы Ь Ээ Юю Яя</p>
                </div>
            </div>
        </section>
        <section class="adaptive adaptive__voleks">
            <div class="adaptive__laptop-img"></div>
            <div class="adaptive__info-container adaptive__info-container_voleks">
                <h3 class="adaptive__heading adaptive__heading_voleks">Адаптивный дизайн</h3>
                <p class="adaptive__description adaptive__description_voleks">
                    Все наши сайты можно просматривать на самых разных устройствах,
                    таких как смартфон, планшет, ноутбук и т.д., независимо от разрешения экрана.
                    Все элементы интерфейса одинаково удобны для всех устройств и их пользователей,
                    например, пользователям мобильных устройств не нужно приближать кнопку на сайте,
                    чтобы не промахнуться мимо нужной ссылки.
                </p>
            </div>
        </section>
        <div class="preview preview__voleks">
            <img class="preview__voleks-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/voleks-img-preview.jpg" alt="Изображение Волекс Сайт"/>
        </div>
    </div>

<?php
get_footer();

