<?php
/*
Template Name: web
*/
?>

<?php get_header(); ?>

	<div class="web">
		<section class="web__image-container">
			<h1 class="web__heading"><?php the_title(); ?></h1>
			<button class="web__button" type="button">
				Получить консультацию
			</button>
			<div class="web__bottom-container">
				<a href="#services" class="scrolldown">
					<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
						<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
						<path class="down"
							  d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z"
							  fill="white"/>
					</svg>
				</a>
				<p class="web__text">Прокрутите вниз</p>
			</div>
		</section>
		<section id="services" class="services">
			<h3 class="services__heading"><?php the_field('web_page_type_of_sites_title_one'); ?></h3>
			<div class="grid">
                <?php if (have_rows('web_page_type_of_sites')): ?>
                    <?php while (have_rows('web_page_type_of_sites')): the_row();
                        $title = get_sub_field('web_page_type_of_site_subtitle');
                        $desc = get_sub_field('web_page_type_of_site');
                        ?>
						<div class="grid__item">
							<h4 class="grid__heading"><?php echo $title; ?></h4>
							<p class="grid__description"><?php echo $desc; ?></p>
						</div>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</section>
        <?php the_content(); ?>
	</div>
	<section class="history-web">
		<div class="history-web__container">
			<h3 class="history-web__heading"><?php the_field('web_page_history_title'); ?></h3>
			<img class="history-web__img history-web__img_mobile"
				 src="<?php the_field('web_page_history_img'); ?>"
				 alt="Иллюстрация совещания"/>
			<div class="history-web__text-container">
                <?php if (have_rows('web_page_history_descrs')): ?>
                    <?php while (have_rows('web_page_history_descrs')): the_row();
                        $desc = get_sub_field('web_page_history_desc');
                        ?>
						<p class="history-web__text"><?php echo $desc; ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
			<img class="history-web__line"
				 src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/line-of-history.svg"
				 alt="Линия истории"/>
		</div>
		<img class="history-web__img"
			 src="<?php the_field('web_page_history_img'); ?>"
			 alt="Иллюстрация совещания"/>
	</section>
<?php include 'inc/section-page-form.php'; ?>
	<section class="portfolio-slider">
		<div class="portfolio-slider__container">
			<h2 class="portfolio-slider__heading">Наши последние работы</h2>
			<div class="portfolio-slider__wrap">
                <?php if (have_rows('web_page_slides')): ?>
                    <?php while (have_rows('web_page_slides')): the_row();
                        $link = get_sub_field('web_page_slide_link');
                        $classForLink = get_sub_field('web_page_slide_class_link');
                        $img = get_sub_field('web_page_slide_img');
                        $classForOverlay = get_sub_field('web_page_slide_class_overlay');
                        $title = get_sub_field('web_page_slide_title');
                        $desc = get_sub_field('web_page_slide_desc');
                        ?>
						<a href="<?php echo $link; ?>" class="carousel__container <?php echo $classForLink; ?>">
							<div class="carousel-overlay">
								<img src="<?php echo $img; ?>"
									 alt="Иконка сайта"
									 class="carousel-overlay__icon <?php echo $classForOverlay; ?>"/>
								<h3 class="carousel-overlay__heading"><?php echo $title; ?></h3>
								<p class="carousel-overlay__subheading"><?php echo $desc; ?></p>
							</div>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</section>
	</div>

<?php get_footer();
