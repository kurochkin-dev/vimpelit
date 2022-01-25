<?php
/*
Template Name: Главная
*/
?>
<?php
get_header();
?>

	<div class="main-page">
		<nav class="main-page__images-container">
			<a href="/it" class="main-page__container main-page__container_it">
				<div class="main-page__container-overlay">
					<h1 class="main-page__heading main-page__heading_it">it сервис</h1>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg"
						 alt="Иконка мышки"
						 class="main-page__mouse-icon"/>
				</div>
			</a>
<!--			<a href="#info-business-card" class="scrolldown-index">-->
<!--				<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--					<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>-->
<!--					<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>-->
<!--					<path class="down" d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z" fill="white"/>-->
<!--				</svg>-->
<!--			</a>-->
			<a href="/web" class="main-page__container main-page__container_web">
				<div class="main-page__container-overlay">
					<h1 class="main-page__heading main-page__heading_web">web студия</h1>
					<p class="main-page__down-text">Прокрутите вниз</p>
				</div>
			</a>
		</nav>
		<section class="about-us">
			<div class="about-us__container">
				<h3 class="about-us__heading"><?php the_field('main_page_title_one'); ?></h3>
                <?php if (have_rows('main_page_descrs_one')): ?>
                    <?php while (have_rows('main_page_descrs_one')): the_row();
                        $desc = get_sub_field('main_page_desc_one');
                        ?>
						<p class="about-us__text"><?php echo $desc; ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
			<img class="about-us__img" src="<?php the_field('main_page_about_img'); ?>" alt="Иллюстрация офиса"/>
		</section>
        <?php
        include 'inc/section-page-form.php';
        ?>
		<section class="history">
			<img class="history__img"
				 src="<?php echo get_template_directory_uri(); ?>/assets/images/illustration-two.jpg"
				 alt="Иллюстрация совещания"/>
			<div class="history__container">
				<h3 class="history__heading"><?php the_field('main_page_title_two'); ?></h3>
				<img class="history__img history__img_mobile" src="<?php the_field('main_page_history_img'); ?>"
					 alt="Иллюстрация совещания"/>
                <?php if (have_rows('main_page_descrs_two')): ?>
                    <?php while (have_rows('main_page_descrs_two')): the_row();
                        $desc = get_sub_field('main_page_desc_two');
                        ?>
						<p class="history__text"><?php echo $desc; ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
				<img class="history__line" src="<?php the_field('main_page_history_img_line'); ?>" alt="Линия истории"/>
			</div>
		</section>
		<section class="schedule">
			<h3 class="schedule__heading"><?php the_field('main_page_num_title'); ?></h3>
			<div class="schedule__container">
                <?php if (have_rows('main_page_numbers')): ?>
                    <?php while (have_rows('main_page_numbers')): the_row();
                        $num = get_sub_field('main_page_number');
                        $desc = get_sub_field('main_page_number_desc')
                        ?>
						<div class="schedule__info-container">
							<p class="schedule__number"><?php echo $num; ?></p>
							<p class="schedule__info"><?php echo $desc; ?></p>
						</div>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</section>
		<div class="team">
			<div class="team__container">
				<img class="team__img" src="<?php the_field('main_page_competence_img_one'); ?>"
					 alt="Иллюстрация команды"/>
				<p class="team__text">
                    <?php the_field('main_page_competence_desc_one'); ?>
				</p>
			</div>
			<div class="team__container">
				<img class="team__img team__img_center"
					 src="<?php the_field('main_page_competence_img_two'); ?>"
					 alt="Иллюстрация команды"/>
				<p class="team__text team__text_center">
                    <?php the_field('main_page_competence_desc_two'); ?>
				</p>
			</div>
			<div class="team__container">
				<img class="team__img team__img_bottom"
					 src="<?php the_field('main_page_competence_img_three'); ?>"
					 alt="Иллюстрация команды"/>
				<p class="team__text">
                    <?php the_field('main_page_competence_desc_three'); ?>
				</p>
			</div>
		</div>
	</div>
<?php
get_footer();


