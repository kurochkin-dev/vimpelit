<?php
/*
Template Name: ЮрКонсул
*/
?>

<?php
get_header();
?>

    <div class="yur-konsul">
        <section class="yur-konsul__image">
            <div class="yur-konsul__overlay-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/ur-consul-icon.svg" alt="Иконка Строй Снаб" class="yur-konsul__icon" />
                <h1 class="yur-konsul__heading">ЮрКонсул</h1>
                <p class="yur-konsul__subheading">Реализация деятельности ТСН(Ж), ЖСК и УК по управлению недвижимым имуществом</p>
            </div>
        </section>
        <section class="about">
            <h3 class="about__heading">О проекте</h3>
            <div class="about__container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ur-konsul-about-img.jpg" alt="Фотография" class="about__img about__img_yur-konsul" />
                <div class="about__text-container about__text-container_yur-konsul">
                    <p class="about__subheading">ООО «ЮК Юрконсул» создано с целью реализации деятельности ТСН(Ж),  ЖСК и УК по управлению комплексом недвижимого имущества, обеспечению эксплуатации, решению вопросов и проблем, возникающих в процессе управления.</p>
                    <p class="about__list-heading">Услуги компании:</p>
                    <ul class="about__list">
                        <li class="about__list-item">- взыскание задолженности по заявлениям о выдаче судебных приказов и в исковом порядке; </li>
                        <li class="about__list-item">- разработка и проверка договоров, заключаемых клиентом;</li>
                        <li class="about__list-item">- подготовка проектов ответов собственникам помещений в соответствии со стандартом раскрытия информации;</li>
                        <li class="about__list-item">- консультирование по жилищным вопросам, в том числе изменениям в ЖК РФ, трудовым вопросам (проблемы с работниками) и другие.</li>
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
                                <div class="colors__square colors__square_gold"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#CAAB74</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_black"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#030303</p>
                                </div>
                            </div>
                            <div class="colors__square-group">
                                <div class="colors__square colors__square_blue"></div>
                                <div class="colors__type-container">
                                    <p class="colors__type">#6EC1E4</p>
                                </div>
                            </div>
                        </div>
                        <div class="colors__rectangle-group">
                            <div class="colors__rectangle colors__rectangle_grey"></div>
                            <div class="colors__type-container">
                                <p class="colors__type">#636363</p>
                            </div>
                        </div>
                    </div>
                    <div class="colors__icon-container">
                        <div class="colors__ferst-container colors__ferst-container_voleks">
                            <img class="colors__icon colors__icon_certificate" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mark-icon.svg" alt="Иконка сертификата"/>
                            <img class="colors__icon colors__icon_paper" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/people-icon.svg" alt="Иконка бумаги"/>
                        </div>
                        <div class="colors__second-container colors__second-container_voleks">
                            <img class="colors__icon colors__icon_shield" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/shield-icon.svg" alt="Иконка бумаги с линейкой"/>
                            <img class="colors__icon colors__icon_award" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/like-icon.svg" alt="Иконка награды"/>
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
                    <h4 class="typography__roboto-heading typography__roboto-heading_yur-konsul">Alegreya SC</h4>
                    <p class="typography__roboto-letters typography__roboto-letters_yur-konsul">Aa Bb Cc Dd Ee Ff Gg Hh Ii Kk Ll Mm Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy and Zz</p>
                    <p class="typography__roboto-letters typography__roboto-letters_yur-konsul">Aa Бб Вв Гг Дд Ее Ёё Жж Зз Ии Йй Кк Лл Мм Нн Оо Пп Рр Сс Тт Уу Фф Хх Цц Чч Шш Щщ Ъ Ы Ь Ээ Юю Яя</p>
                </div>
            </div>
        </section>
        <section class="adaptive-yur-konsul">
            <div class="adaptive-yur-konsul__img"></div>
            <div class="adaptive-yur-konsul__info-container">
                <h3 class="adaptive-yur-konsul__heading">Адаптивный дизайн</h3>
                <p class="adaptive-yur-konsul__description">
                    Все наши сайты можно просматривать на самых разных устройствах,
                    таких как смартфон, планшет, ноутбук и т.д., независимо от разрешения экрана.
                    Все элементы интерфейса одинаково удобны для всех устройств и их пользователей,
                    например,  пользователям мобильных устройств не нужно приближать кнопку на сайте,
                    чтобы не промахнуться мимо нужной ссылки.
                </p>
            </div>
        </section>
        <div class="preview preview__yur-konsul">
            <img class="preview__yur-konsul-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/yur-konsul-img-preview.webp" alt="Превью"/>
        </div>
    </div>

<?php
get_footer();
