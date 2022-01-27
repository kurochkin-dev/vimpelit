<?php
/*
Template Name: Остмедконсалт
*/
?>

<?php
get_header();
?>

    <div class="ost-med-consult">
        <section class="ost-med-consult__image">
            <div class="ost-med-consult__overlay-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/ost-med-consalt-icon.svg" alt="Иконка Арбеллос" class="ost-med-consult__icon" />
                <h1 class="ost-med-consult__heading">Остмедконсалт</h1>
                <p class="ost-med-consult__subheading">Многопрофильная клиника: эстетическая медицина и пластическая хирургия</p>
            </div>
        </section>
        <section class="about-ost-med-consult">
            <h3 class="about-ost-med-consult__heading">О проекте</h3>
            <div class="about-ost-med-consult__container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ost-med-consult-about-img.jpg" alt="Изображение Ост Медиа Консалт" class="about-ost-med-consult__img" />
                <div class="about-ost-med-consult__text-container">
                    <p class="about-ost-med-consult__text">
                        Многопрофильная клиника ОстМедКонсалт работает в области эстетической
                        медицины с 1998 года. И первой в Санкт-Петербурге предложила революционную
                        методику золотого армирования, технику которой наши врачи осваивали в Испании.
                    </p>
                    <p class="about-ost-med-consult__text">
                        Успех, достигнутый в этой области, послужил толчком к дальнейшему
                        развитию. С 2011 года «ОстМедКонсалт» включена в перечень медицинских
                        организаций, участвующих в реализации Территориальной программы ОМС Санкт-Петербурга. 13
                        тысяч детей за эти годы получили медицинскую помощь
                        высочайшего уровня благодаря технологиям лазерной и близкофокусной рентген
                        терапии, которые в нашем регионе выполняются только в «ОстМедКонсалт».
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
                                <div class="colors__square colors__square_grey"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#54595F</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_green"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#00BA6F</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_yellow"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#F2E972</p>
                                </div>
                            </div>
                        </div>
                        <div class="colors__rectangle-group">
                            <div class="colors__rectangle colors__rectangle_light-grey"></div>
                            <div class="colors__type-container">
                                <p class="colors__type">#E6E9E7</p>
                            </div>
                        </div>
                    </div>
                    <div class="colors__icon-container">
                        <div class="colors__ferst-container colors__first-container_la-mia-borsa">
                            <img class="colors__icon colors__icon_call-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/terminal-icon.svg" alt="Иконка терминала"/>
                            <img class="colors__icon colors__icon_first-bag" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/cres-icon.svg" alt="Иконка креста"/>
                        </div>
                        <div class="colors__second-container colors__second-container_la-mia-borsa">
                            <img class="colors__icon colors__icon_best" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/doctor-icon.svg" alt="Иконка доктора"/>
                            <img class="colors__icon colors__icon_second-bag" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/cert-icon.svg" alt="Иконка сертификата"/>
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
                    <h5 class="typography__roboto-heading typography__roboto-heading_open-sans">Open Sans</h5>
                    <p class="typography__roboto-letters typography__roboto-letters_open-sans">Aa Bb Cc Dd Ee Ff Gg Hh Ii Jj Kk Ll Mm Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz</p>
                    <p class="typography__roboto-letters typography__roboto-letters_open-sans">Aa Бб Вв Гг Дд Ее Ёё Жж Зз Ии Йй Кк Лл Мм Нн Оо Пп Рр Сс Тт Уу Фф Хх Цц Чч Шш Щщ Ъ Ы Ь Ээ Юю Яя</p>
                </div>
            </div>
        </section>
        <section class="adaptive-ost-med-consult">
            <img class="adaptive-ost-med-consult__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/girl-adaptive-img.webp" alt="Изображение устройств"/>
            <div class="adaptive-ost-med-consult__info-container">
                <h3 class="adaptive-ost-med-consult__heading">Адаптивный дизайн</h3>
                <p class="adaptive-ost-med-consult__description">
                    Все наши сайты можно просматривать на самых разных устройствах,
                    таких как смартфон, планшет, ноутбук и т.д., независимо от разрешения экрана.
                    Все элементы интерфейса одинаково удобны для всех устройств и их пользователей,
                    например, пользователям мобильных устройств не нужно приближать кнопку на сайте,
                    чтобы не промахнуться мимо нужной ссылки.
                </p>
            </div>
        </section>
        <div class="preview-ost-med-consult">
            <img class="preview-ost-med-consult__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ost-med-consult-img-preview.jpg" alt="Изображение превью Ост мед консалт"/>
        </div>
    </div>


<?php
get_footer();
