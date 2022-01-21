<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description"
		  content="Создание и продвижение сайтов! Современный дизайн! SEO оптимизация для эффективного привлечения клиентов! Техническое обслуживание персональных компьютеров, печатных устройств и т.д.! Команда профессионалов!">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="canonical" href="https://178spb.com/">
	<title>Создание сайтов в Санкт-Петербурге – "Вымпел"</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="app">
	<header class="header">
		<div class="header-info header-info_background header-info_landing">
			<nav class="header-info__container">
				<a href="https://yandex.ru/maps/2/saint-petersburg/house/prospekt_obukhovskoy_oborony_199/Z0kYcgFhS0IPQFtjfXR3dnVqZA"
				   target="_blank" rel="nofollow noreferrer" class="header-info__location">
					<?php the_field('header_address', 'option'); ?>
				</a>
				<a href="tel:<?php the_field('header_phone', 'option'); ?>" class="header-info__phone-number">
					<p class="header-info__phone-icon"></p>
					<?php the_field('header_phone', 'option'); ?>
				</a>
				<button class="header-info__button" type="button">
					Получить консультацию
				</button>
				<a href="<?php the_field('header_link_inst', 'option'); ?>" target="_blank" rel="nofollow noreferrer"
				   class="header-info__icon-container header-info__icon-container_inst"></a>
				<a href="<?php the_field('header_link_vk', 'option'); ?>" target="_blank" rel="nofollow noreferrer"
				   class="header-info__icon-container header-info__icon-container_vk"></a>
			</nav>
		</div>
		<div class="navigation">
			<nav class="navigation__container">
				<a href='/' class="navigation__logo"></a>
                <?php wp_nav_menu([
					'menu' => 'menu-header-menu',
                    'container_class' => 'navigation__main-links-container',
                    'menu_class' => 'navigation__list',
                    'walker' => new WPSE_78121_Sublevel_Walker
                ]); ?>
				<!--				<nav class="navigation__main-links-container">-->
				<!--					<ul class="navigation__list">-->
				<!--						<li class="navigation__item"><a href='/it' class="navigation__links navigation__links_it">IT-->
				<!--								Сервис</a></li>-->
				<!--						<li class="navigation__item"><a href='/web' class="navigation__links navigation__links_web">WEB-->
				<!--								Студия</a></li>-->
				<!--					</ul>-->
				<!--				</nav>-->
				<!--				<nav class="navigation__links-container">-->
				<!--					<ul class="navigation__list">-->
				<!--						<li class="navigation__item"><a href='/' class="navigation__links">О Компании</a></li>-->
				<!--						<li class="navigation__item">-->
				<!--							<p class="navigation__item navigation__links navigation__links_services">-->
				<!--								Услуги-->
				<!--								<img src="-->
                <?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/arrow.svg"-->
				<!--									 alt="Стрелка"-->
				<!--									 class="navigation__arrow"/>-->
				<!--							</p>-->
				<!--						</li>-->
				<!--						<li class="navigation__item">-->
				<!--							<p class="navigation__links navigation__links_portfolio">-->
				<!--								Портфолио-->
				<!--								<img src="-->
                <?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/arrow.svg"-->
				<!--									 alt="Стрелка"-->
				<!--									 class="navigation__portfolio-arrow"/>-->
				<!--							</p>-->
				<!--						</li>-->
				<!--						<li class="navigation__item">-->
				<!--							<p class="navigation__links navigation__links_price">-->
				<!--								Цены на услуги-->
				<!--								<img src="-->
                <?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/arrow.svg"-->
				<!--									 alt="Стрелка"-->
				<!--									 class="navigation__price-arrow"/>-->
				<!--							</p>-->
				<!--						</li>-->
				<!--						<li class="navigation__item">-->
				<!--							<a href="/contacts" class="navigation__links">Контакты</a>-->
				<!--						</li>-->
				<!--					</ul>-->
				<!--					<div class="drop-down-menu">-->
				<!--						<div class="drop-down-menu__background">-->
				<!--							<img-->
				<!--								src="-->
                <?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/drop-down-menu-close-button.svg"-->
				<!--								alt="Иконка закрытия" class="drop-down-menu__close-button"/>-->
				<!--							<nav class="drop-down-menu__container">-->
				<!--								<ul class="navigation__list navigation__list-dropdown">-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/web' class="drop-down-menu__heading drop-down-menu__heading_web">-->
				<!--											WEB Студия</a>-->
				<!--									</li>-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/shop' class="drop-down-menu__links drop-down-menu__links_web">-->
				<!--											Интернет-магазин</a>-->
				<!--									</li>-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/landing' class="drop-down-menu__links drop-down-menu__links_web">-->
				<!--											Landing page</a>-->
				<!--									</li>-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/business-card'-->
				<!--										   class="drop-down-menu__links drop-down-menu__links_web">-->
				<!--											Сайт-визитка</a>-->
				<!--									</li>-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/multipage' class="drop-down-menu__links drop-down-menu__links_web">-->
				<!--											Корпоративный сайт</a>-->
				<!--									</li>-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/catalog' class="drop-down-menu__links drop-down-menu__links_web">-->
				<!--											Сайт-каталог</a>-->
				<!--									</li>-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/seo' class="drop-down-menu__links drop-down-menu__links_web">-->
				<!--											SEO</a>-->
				<!--									</li>-->
				<!--								</ul>-->
				<!--							</nav>-->
				<!--							<nav class="drop-down-menu__container drop-down-menu__container_it">-->
				<!--								<ul class="navigation__list navigation__list-dropdown">-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/it' class="drop-down-menu__heading drop-down-menu__heading_it">-->
				<!--											IT Сервис</a>-->
				<!--									</li>-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/it/#service' class="drop-down-menu__links drop-down-menu__links_it">-->
				<!--											Абонентское обслуживание</a>-->
				<!--									</li>-->
				<!--									<li class="navigation__item">-->
				<!--										<a href='/it/#one-time' class="drop-down-menu__links drop-down-menu__links_it">-->
				<!--											Разовые услуги IT</a>-->
				<!--									</li>-->
				<!--								</ul>-->
				<!--							</nav>-->
				<!--						</div>-->
				<!--					</div>-->
				<!--					<div class="drop-down-menu drop-down-menu-portfolio">-->
				<!--						<div class="drop-down-menu-portfolio__background">-->
				<!--							<img-->
				<!--								src="-->
                <?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/drop-down-menu-close-button.svg"-->
				<!--								alt="Иконка закрытия"-->
				<!--								class="drop-down-menu-portfolio__close-button"/>-->
				<!--							<nav class="drop-down-menu-portfolio__container">-->
				<!--								<ul class="navigation__list navigation__list-dropdown">-->
				<!--									<li class="navigation__item">-->
				<!--										<a href="/portfolio-web"-->
				<!--										   class="drop-down-menu-portfolio__links drop-down-menu-portfolio__links_web">WEB-->
				<!--											Студия</a>-->
				<!--									</li>-->
				<!--								</ul>-->
				<!--							</nav>-->
				<!--							<nav class="drop-down-menu-portfolio__container drop-down-menu-portfolio__container_it">-->
				<!--								<ul class="navigation__list navigation__list-dropdown">-->
				<!--									<li class="navigation__item">-->
				<!--										<a href="/portfolio-it"-->
				<!--										   class="drop-down-menu-portfolio__links drop-down-menu-portfolio__links_it">IT-->
				<!--											Сервис</a>-->
				<!--									</li>-->
				<!--								</ul>-->
				<!--							</nav>-->
				<!--						</div>-->
				<!--					</div>-->
				<!--					<div class="drop-down-menu drop-down-menu-price">-->
				<!--						<div class="drop-down-menu-price__background">-->
				<!--							<img-->
				<!--								src="-->
                <?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/drop-down-menu-close-button.svg"-->
				<!--								alt="Иконка закрытия"-->
				<!--								class="drop-down-menu-price__close-button"/>-->
				<!--							<nav class="drop-down-menu-price__container">-->
				<!--								<ul class="navigation__list navigation__list-dropdown">-->
				<!--									<li class="navigation__item">-->
				<!--										<a href="/price-web"-->
				<!--										   class="drop-down-menu-price__links drop-down-menu-price__links_web">-->
				<!--											WEB Студия</a>-->
				<!--									</li>-->
				<!--								</ul>-->
				<!--							</nav>-->
				<!--							<nav class="drop-down-menu-price__container drop-down-menu-price__container_it">-->
				<!--								<ul class="navigation__list navigation__list-dropdown">-->
				<!--									<li class="navigation__item">-->
				<!--										<a href="/price-it"-->
				<!--										   class="drop-down-menu-price__links drop-down-menu-price__links_it">-->
				<!--											IT Сервис</a>-->
				<!--									</li>-->
				<!--								</ul>-->
				<!--							</nav>-->
				<!--						</div>-->
				<!--					</div>-->
				<!--				</nav>-->
			</nav>
		</div>
		<div class="mobile-header">
			<a href='/' class="mobile-header__logo"></a>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/burger-menu-button.svg"
				 data-replace="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mobile-navigation-close-button.svg"
				 alt="Лого" class="mobile-header__menu-button mobile-header__menu-button_close"/>
			<div class="mobile-navigation">
				<nav class="mobile-navigation__nav-container">
                    <?php wp_nav_menu([
						'theme_location' => 'mobile',
                        'menu' => 'menu-mobile-menu',
						'container' => false,
                        'container_class' => '',
                        'menu_class' => 'mobile-navigation__nav-container'
                    ]); ?>
<!--					<h3 id="it-service" class="mobile-navigation__links mobile-navigation__links_menu">-->
<!--						IT сервис-->
<!--						<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/arrow.svg" alt="Стрелка"-->
<!--							 class="mobile-navigation__arrow"/>-->
<!--					</h3>-->
<!--					<div class="drop-down__block it-service">-->
<!--						<ul class="navigation__list navigation__list-dropdown">-->
<!--							<li class="navigation__item">-->
<!--								<a href='/it/#service'-->
<!--								   class="mobile-navigation__links mobile-navigation__links_drop-down">Абонентское-->
<!--									обслуживание</a>-->
<!--							</li>-->
<!--							<li class="navigation__item">-->
<!--								<a href='/it/#one-time'-->
<!--								   class="mobile-navigation__links mobile-navigation__links_drop-down">Разовые-->
<!--									услуги-->
<!--									IT</a>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</div>-->
<!---->
<!--					<h3 id="web-studio" class="mobile-navigation__links mobile-navigation__links_menu">-->
<!--						Web студия-->
<!--						<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/arrow.svg" alt="Стрелка"-->
<!--							 class="mobile-navigation__arrow"/>-->
<!--					</h3>-->
<!--					<div class="drop-down__block web-studio">-->
<!--						<ul class="navigation__list navigation__list-dropdown">-->
<!--							<li class="navigation__item">-->
<!--								<a href='/shop' class="mobile-navigation__links mobile-navigation__links_drop-down">Интернет-магазин</a>-->
<!--							</li>-->
<!--							<li class="navigation__item">-->
<!--								<a href='/landing' class="mobile-navigation__links mobile-navigation__links_drop-down">Landing-->
<!--									page</a>-->
<!--							</li>-->
<!--							<li class="navigation__item">-->
<!--								<a href='/business-card'-->
<!--								   class="mobile-navigation__links mobile-navigation__links_drop-down">Сайт-визитка</a>-->
<!--							</li>-->
<!--							<li class="navigation__item">-->
<!--								<a href='/multipage'-->
<!--								   class="mobile-navigation__links mobile-navigation__links_drop-down">Корпоративный-->
<!--									сайт</a>-->
<!--							</li>-->
<!--							<li class="navigation__item">-->
<!--								<a href='/catalog' class="mobile-navigation__links mobile-navigation__links_drop-down">Сайт-каталог</a>-->
<!--							</li>-->
<!--							<li class="navigation__item">-->
<!--								<a href='/seo'-->
<!--								   class="mobile-navigation__links mobile-navigation__links_drop-down">SEO</a>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</div>-->
<!--					<a href='/' class="mobile-navigation__links">О Компании</a>-->
<!--					<h3 id="portfolio" class="mobile-navigation__links mobile-navigation__links_menu">-->
<!--						Портфолио-->
<!--						<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/arrow.svg" alt="Стрелка"-->
<!--							 class="mobile-navigation__arrow"/>-->
<!--					</h3>-->
<!--					<div class="drop-down__block portfolio">-->
<!--						<ul class="navigation__list navigation__list-dropdown">-->
<!--							<li class="navigation__item">-->
<!--								<a href='/portfolio-web'-->
<!--								   class="mobile-navigation__links mobile-navigation__links_drop-down">Web-->
<!--									студия</a>-->
<!--							</li>-->
<!--							<li class="navigation__item">-->
<!--								<a href='/portfolio-it'-->
<!--								   class="mobile-navigation__links mobile-navigation__links_drop-down">IT-->
<!--									сервис</a>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</div>-->
<!--					<h3 id="priceService" class="mobile-navigation__links mobile-navigation__links_menu">-->
<!--						Цены на услуги-->
<!--						<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/arrow.svg" alt="Стрелка"-->
<!--							 class="mobile-navigation__arrow"/>-->
<!--					</h3>-->
<!--					<div class="drop-down__block price-service">-->
<!--						<ul class="navigation__list navigation__list-dropdown">-->
<!--							<li class="navigation__item">-->
<!--								<a href='/price-web'-->
<!--								   class="mobile-navigation__links mobile-navigation__links_drop-down">Web-->
<!--									студия</a>-->
<!--							</li>-->
<!--							<li class="navigation__item">-->
<!--								<a href='/price-it' class="mobile-navigation__links mobile-navigation__links_drop-down">IT-->
<!--									сервис</a>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</div>-->
<!--					<a href='/contacts' class="mobile-navigation__links">Контакты</a>-->
				</nav>
				<nav class="mobile-navigation__info-container">
					<p class="mobile-navigation__info-heading">Позвоните нам</p>
					<a href="tel:+78123728561" class="mobile-navigation__phone-number">
						+7 (812)-372-85-61
					</a>
					<a href="https://yandex.ru/maps/2/saint-petersburg/house/prospekt_obukhovskoy_oborony_199/Z0kYcgFhS0IPQFtjfXR3dnVqZA"
					   target="_blank" rel="nofollow noreferrer" class="mobile-navigation__location">
						г. Санкт-Петербург, пр. Обуховской Обороны, д.199
					</a>
					<div class="mobile-navigation__icon-container">
						<a href="https://www.instagram.com/vimpel_it_web/" target="_blank" rel="nofollow noreferrer"
						   class="mobile-navigation__icon mobile-navigation__icon_inst"></a>
						<a href="https://vk.com/vimpel_it_web/" target="_blank" rel="nofollow noreferrer"
						   class="mobile-navigation__icon mobile-navigation__icon_vk"></a>
					</div>
					<button class="mobile-navigation__button" type="button">
						Получить консультацию
					</button>
				</nav>
			</div>
		</div>
	</header>
	<section class="popup">
		<div class="popup__form-background">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/popup-close-button.svg"
				 alt="Кнопка закрытия попапа" class="popup__close-button"/>
			<h3 class="popup__heading">Получите бесплатную консультацию от наших специалистов</h3>
			<div class="popup__form">
                <?php echo do_shortcode('[contact-form-7 id="59" title="Форма во всплывающем окне"]') ?>
				<!--			<div class="popup__inputs-container">-->
				<!--				<div class="popup__input-container">-->
				<!--					<input type="text" class="popup__input" id="popup-name-input" name="name" value='' min="2" max="50"-->
				<!--						   placeholder="Ваше имя" pattern="[A-Za-zа-яёА-ЯЁ -]{1,}" required/>-->
				<!--					<span id="popup-name-input-error" class="popup-form__input_error"></span>-->
				<!--				</div>-->
				<!--				<div class="popup__input-container">-->
				<!--					<input type="text" class="popup__input" id="popup-number-input" name="number" value='' min="3"-->
				<!--						   max="20" placeholder="Ваш телефон"-->
				<!--						   pattern='^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$' required/>-->
				<!--					<span id="popup-number-input-error" class="popup-form__input_error"></span>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<h4 class="popup__question">Как удобнее связаться с Вами?</h4>-->
				<!--			<div class="popup__radio-container">-->
				<!--				<div class="popup__radio">-->
				<!--					<input id="phone" type="radio" name="variant" value="Телефон" checked/>-->
				<!--					<label for="phone">Телефон</label>-->
				<!--				</div>-->
				<!--				<div class="popup__radio">-->
				<!--					<input id="whatsApp" type="radio" name="variant" value="WhatsApp"/>-->
				<!--					<label for="whatsApp">WhatsApp</label>-->
				<!--				</div>-->
				<!--				<div class="popup__radio">-->
				<!--					<input id="telegram" type="radio" name="variant" value="Telegram"/>-->
				<!--					<label for="telegram">Telegram</label>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<div class="popup__submit-container">-->
				<!--				<button type="submit" class="popup__submit-button">Получить консультацию</button>-->
				<!--				<div class="popup__under-submit-button-container">-->
				<!--					<img src="-->
                <?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/check.svg"-->
				<!--						 alt="Иконка галочки" class="popup__under-submit-button-check"/>-->
				<!--					<p class="popup__under-submit-button-text">Принимаю пользовательское соглашение</p>-->
				<!--				</div>-->
				<!--			</div>-->
			</div>
		</div>
	</section>
<?php
