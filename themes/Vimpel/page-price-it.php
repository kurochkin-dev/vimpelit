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
			<h2 class="price-it__heading">цены на услуги it сервиса</h2>
			<p class="price-it__subheading">Ознакомьтесь с перечнем наших услуг, а также их стоимостью</p>
			<button class="price-it__button" type="button">Получить консультацию</button>
			<div class="price-it__bottom-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
					 class="price-it__mouse-icon"/>
				<p class="price-it__text">Прокрутите вниз</p>
			</div>
		</section>
		<section class="table-it-component">
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

