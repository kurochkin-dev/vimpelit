<?php
/*
Template Name: Создание сайта-визитки под ключ
*/
?>

<?php get_header(); ?>

	<div class="business-card">
		<section class="business-card__image-container">
			<h1 class="business-card__heading">создание сайта-визитки под ключ</h1>
			<p class="business-card__subheading">Проектирование и разработка сайта-визитки в Санкт-Петербурге</p>
			<button class="business-card__button" type="button">Заказать сайт</button>
			<div class="business-card__bottom-container">
				<a href="#info-business-card" class="scrolldown">
					<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
						<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
						<path class="down" d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z" fill="white"/>
					</svg>
				</a>
				<p class="business-card__text">Прокрутите вниз</p>
			</div>
		</section>
		<section id="info-business-card" class="info-business-card">
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
        <?php include 'inc/section-business-card.php' ?>
	</div>

<?php get_footer();
