<?php
/*
Template Name: Портфолио It сервис
*/
?>

<?php
get_header();
?>

	<div class="portfolio-it">
		<section class="portfolio-it__image-container">
			<h2 class="portfolio-it__heading">портфолио it сервис</h2>
			<div class="portfolio-it__bottom-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
					 class="portfolio-it__mouse-icon"/>
				<p class="portfolio-it__text">Прокрутите вниз</p>
			</div>
		</section>
		<section class="company">
			<h3 class="company__heading">наши клиенты:</h3>
			<section class="grid-company">
                <?php if (have_rows('it-service_clients')): ?>
                    <?php while (have_rows('it-service_clients')): the_row();
                        $img = get_sub_field('it-service_img');
                        $title = get_sub_field('it-service_title');
                        $desc = get_sub_field('it-service_desc');
                        ?>
						<div class="grid-company__card">
							<img class="grid-company__logo" src="<?php echo $img; ?>" alt="Логотип компании"/>
							<h4 class="grid-company__heading"><?php echo $title; ?></h4>
							<p class="grid-company__description"><?php echo $desc; ?></p>
						</div>
                    <?php endwhile; ?>
                <?php endif; ?>
			</section>
		</section>
	</div>

<?php
get_footer();
