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
	<title><?php wp_title(); ?></title>
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
				<button class="header-info__button" type="button" data-page-title="<?= the_title() ?>">
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
                    'walker' => new the_god_of_walker
                ]); ?>
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
				</nav>
				<nav class="mobile-navigation__info-container">
					<p class="mobile-navigation__info-heading">Позвоните нам</p>
					<a href="tel:+78123728561" class="mobile-navigation__phone-number">
						+7(812)-372-85-61
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
					<button class="mobile-navigation__button" type="button" data-page-title="<?= the_title() ?>">
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
			</div>
		</div>
	</section>
	<section class="popup-header">
		<div class="popup__form-background">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/popup-close-button.svg"
				 alt="Кнопка закрытия попапа" class="popup__close-button"/>
			<h3 class="popup__heading">Получите бесплатную консультацию от наших специалистов</h3>
			<div class="popup__form">
                <?php echo do_shortcode('[contact-form-7 id="579" title="Форма в шапке сайта"]') ?>
			</div>
		</div>
	</section>
<?php
