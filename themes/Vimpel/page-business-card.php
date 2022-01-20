<?php
/*
Template Name: Создание сайта-визитки под ключ
*/
?>

<?php
get_header();
?>

	<div class="business-card">
		<section class="business-card__image-container">
			<h2 class="business-card__heading">создание сайта&#8209;визитки под ключ</h2>
			<p class="business-card__subheading">Проектирование и разработка сайта-визитки в Санкт-Петербурге</p>
			<button class="business-card__button" type="button">Заказать сайт</button>
			<div class="business-card__bottom-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
					 class="business-card__mouse-icon"/>
				<p class="business-card__text">Прокрутите вниз</p>
			</div>
		</section>
		<section class="info-business-card">
			<div class="info-business-card__container">
				<h3 class="info-business-card__heading"><?php the_field('business-card_title'); ?></h3>
				<p class="info-business-card__description">
                    <?php the_field('business-card_desc_one'); ?>
				</p>
				<h4 class="info-business-card__subheading"><?php the_field('business-card_subtitle'); ?></h4>
				<p class="info-business-card__description">
                    <?php the_field('business-card_desc_two'); ?>
				</p>
			</div>
		</section>
        <?php include 'section-business-card.php' ?>
	</div>

<?php
get_footer();
