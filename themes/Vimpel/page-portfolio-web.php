<?php
/*
Template Name: Портфолио web студии
*/
?>

<?php
get_header();
?>

	<div class="portfolio-web">
		<section class="portfolio-web__image-container">
			<h2 class="portfolio-web__heading">портфолио web студии</h2>
			<div class="portfolio-web__bottom-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
					 class="portfolio-web__mouse-icon"/>
				<p class="portfolio-web__text">Прокрутите вниз</p>
			</div>
		</section>
		<section class="grid-container">
            <?php if (have_rows('web_works')): ?>
                <?php while (have_rows('web_works')): the_row();
                    $link = get_sub_field('web_works_link');
                    $classForLink = get_sub_field('web_works_class_one');
                    $img = get_sub_field('web_works_img');
                    $classForOverlay = get_sub_field('web_works_class_two');
                    $title = get_sub_field('web_works_title');
                    $desc = get_sub_field('web_works_desc');
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
		</section>
	</div>

<?php
get_footer();

