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
			<h1 class="portfolio-it__heading">Портфолио it сервис</h1>
			<div class="portfolio-it__bottom-container">
				<a href="#company" class="scrolldown">
					<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
						<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
						<path class="down" d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z" fill="white"/>
					</svg>
				</a>
				<p class="portfolio-it__text">Прокрутите вниз</p>
			</div>
		</section>
		<section id="company" class="company">
			<h3 class="company__heading">Наши клиенты:</h3>
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
