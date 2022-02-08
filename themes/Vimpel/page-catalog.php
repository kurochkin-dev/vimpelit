<?php
/*
Template Name: Создание сайта-каталога под ключ
*/
?>

<?php get_header(); ?>

	<div class="catalog">
		<section class="catalog__image-container">
			<h1 class="catalog__heading">Создание сайта-каталога под ключ</h1>
			<p class="catalog__subheading">Проектирование и разработка сайта-каталога в Санкт-Петербурге</p>
			<button class="catalog__button" type="button">Заказать сайт</button>
			<div class="catalog__bottom-container">
				<a href="#catalog-info" class="scrolldown">
					<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
						<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
						<path class="down" d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z" fill="white"/>
					</svg>
				</a>
				<p class="catalog__text">Прокрутите вниз</p>
			</div>
		</section>
		<section id="catalog-info" class="catalog-info">
			<div class="catalog-info__container">
				<h3 class="catalog-info__heading"><?php the_field('catalog_title'); ?></h3>
				<p class="catalog-info__description">
                    <?php the_field('catalog_desc_one'); ?>
				</p>
				<p class="catalog-info__description"><?php the_field('catalog_subtitle'); ?></p>

                <?php if (have_rows('catalog_list')): ?>
					<ul class="catalog-info__list-container">
                        <?php while (have_rows('catalog_list')): the_row();
                            $item = get_sub_field('catalog_item');
                            ?>
							<li class="catalog-info__list"><?php echo $item; ?></li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
				<p class="catalog-info__description">
                    <?php the_field('catalog_desc_two'); ?>
				</p>
			</div>
		</section>
		<div class="catalog-page-form">
			<div class="catalog-page-form__price">
				<p class="catalog-page-form__price-heading"><?php the_field('catalog_title_two'); ?></p>
                <?php if (have_rows('catalog_list_two')): ?>
					<ul class="catalog-page-form__price-list-container">
                        <?php while (have_rows('catalog_list_two')): the_row();
                            $item = get_sub_field('catalog_item_two');
                            ?>
							<li class="catalog-page-form__price-list"><?php echo $item; ?></li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
				<p class="catalog-page-form__price-cost"><?php the_field('catalog_price'); ?></p>
			</div>
			<div class="catalog-page-form__form">
				<?php echo do_shortcode('[contact-form-7 id="344" title="Форма на странице Создание сайта-каталога"]') ?>
			</div>
		</div>
		<section class="days">
			<div class="days__container">
				<h3 class="days__heading"><?php the_field('catalog_title_three'); ?></h3>
				<div class="days__items-container">
                    <?php if (have_rows('catalog_icons')): ?>
                        <?php while (have_rows('catalog_icons')): the_row();
                            $img = get_sub_field('catalog_img');
                            $term = get_sub_field('catalog_term');
                            $service = get_sub_field('catalog_service');
                            ?>
							<div class="days__item-container">
								<img class="days__img"
									 src="<?php echo $img; ?>"
									 alt="Иконка услуги"/>
								<div class="days__info-container">
									<p class="days__value"><?php echo $term; ?></p>
									<p class="days__type"><?php echo $service; ?></p>
								</div>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
				<div class="days__items-container">
                    <?php if (have_rows('catalog_icons_two')): ?>
                        <?php while (have_rows('catalog_icons_two')): the_row();
                            $img = get_sub_field('catalog_img_two');
                            $term = get_sub_field('catalog_term_two');
                            $service = get_sub_field('catalog_service_two');
                            ?>
							<div class="days__item-container">
								<img class="days__img"
									 src="<?php echo $img; ?>"
									 alt="Иконка услуги"/>
								<div class="days__info-container">
									<p class="days__value"><?php echo $term; ?></p>
									<p class="days__type"><?php echo $service; ?></p>
								</div>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</section>
	</div>

<?php get_footer();
