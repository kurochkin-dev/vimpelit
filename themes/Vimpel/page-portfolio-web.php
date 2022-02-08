<?php get_header(); ?>

<div class="portfolio-web">
	<section class="portfolio-web__image-container">
		<h1 class="portfolio-web__heading">Портфолио web студии</h1>
		<div class="portfolio-web__bottom-container">
			<a href="#grid-container" class="scrolldown">
				<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
					<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
					<path class="down"
						  d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z"
						  fill="white"/>
				</svg>
			</a>
			<p class="portfolio-web__text">Прокрутите вниз</p>
		</div>
	</section>
	<section id="grid-container" class="grid-container">

        <?php
        query_posts('cut=617&order=ASC');
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                if (have_rows('web_works')): ?>
                    <?php while (have_rows('web_works')): the_row();
                        $link = get_sub_field('web_works_link');
                        $classForLink = get_sub_field('web_works_class_one');
                        $img = get_sub_field('web_works_img');
                        $classForOverlay = get_sub_field('web_works_class_two');
                        $title = get_sub_field('web_works_title');
                        $desc = get_sub_field('web_works_desc');
                        ?>
						<a href="<?php echo $link; ?>" class="carousel__container
            <?php echo $classForLink; ?>">
							<div class="carousel-overlay">
								<img src="<?php echo $img; ?>"
									 alt="Иконка сайта"
									 class="carousel-overlay__icon
            <?php echo $classForOverlay; ?>"/>
								<h3 class="carousel-overlay__heading"><?php echo $title; ?></h3>
								<p class="carousel-overlay__subheading"><?php echo $desc; ?></p>
							</div>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php
            }
            wp_reset_query();
        } else {
            echo 'Записей нет';
        }

        ?>
	</section>
</div>

<?php get_footer();

