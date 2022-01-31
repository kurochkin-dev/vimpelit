<div class="yur-konsul">
	<section class="<?php the_field('case_img'); ?>">
		<div class="yur-konsul__overlay-container">
			<img src="<?php the_field('case_icon'); ?>"
				 alt="Иконка Строй Снаб" class="yur-konsul__icon"/>
			<h1 class="yur-konsul__heading"><?php the_title(); ?></h1>
			<p class="yur-konsul__subheading"><?php the_field('case_desc'); ?></p>
		</div>
	</section>
	<h3 class="about__heading">О проекте</h3>
    <?php the_content(); ?>
	<section class="colors">
        <?php the_field('case_colors_and_icons'); ?>
	</section>
	<section class="typography">
        <?php the_field('case_typography'); ?>
	</section>
	<section class="adaptive <?php the_field('case_class_img'); ?>">
        <?php the_field('case_adaptive'); ?>
	</section>
    <?php the_field('case_img_preview'); ?>
    <?php the_field('case_img_preview_two'); ?>
</div>
