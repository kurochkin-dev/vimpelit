<?php
/*
Template Name: Цены на услуги IT сервиса
*/
?>

<?php
get_header();
?>

	<div class="price-it">
		<section class="price-it__image-container">
			<h1 class="price-it__heading">Цены на услуги it сервиса</h1>
			<p class="price-it__subheading">Ознакомьтесь с перечнем наших услуг, а также их стоимостью</p>
			<button class="price-it__button" type="button">Получить консультацию</button>
			<div class="price-it__bottom-container">
				<a href="#table-it-component" class="scrolldown">
					<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
						<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
						<path class="down" d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z" fill="white"/>
					</svg>
				</a>
				<p class="price-it__text">Прокрутите вниз</p>
			</div>
		</section>
		<section id="table-it-component" class="table-it-component">
			<h3 class="table-it-component__heading"><?php the_field('page-price-it_main_title'); ?></h3>
			<div class="table-it">
				<h4 class="table-it__heading"><?php the_field('page-price-it_subtitle_one'); ?></h4>
                <?php the_field('page-price-it_table_one'); ?>
			</div>
			<div class="table-it">
				<h4 class="table-it__heading"><?php the_field('page-price-it_subtitle_two'); ?></h4>
                <?php the_field('page-price-it_table_two'); ?>
			</div>
			<div class="table-it">
				<h4 class="table-it__heading"><?php the_field('page-price-it_subtitle_three'); ?></h4>
                <?php the_field('page-price-it_table_three'); ?>
			</div>
			<div class="table-it">
				<h4 class="table-it__heading"><?php the_field('page-price-it_subtitle_four'); ?></h4>
                <?php the_field('page-price-it_table_four'); ?>
			</div>
			<div class="table-it">
				<h4 class="table-it__heading"><?php the_field('page-price-it_subtitle_five'); ?></h4>
                <?php the_field('page-price-it_table_five'); ?>
			</div>
			<div class="table-it table-margin">
				<h4 class="one-time-services__heading"><?php the_field('page-price-it_subtitle_six'); ?></h4>
                <?php the_field('page-price-it_table_six'); ?>
			</div>
		</section>
	</div>


<?php
get_footer();

