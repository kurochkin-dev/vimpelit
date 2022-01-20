<?php
/*
Template Name: Создание Landing page под ключ
*/
?>

<?php
get_header();
?>

<div class="landing">
    <section class="landing__image-container">
        <h2 class="landing__heading">создание landing page под ключ</h2>
        <p class="landing__subheading">Проектирование и разработка landing page в Санкт-Петербурге</p>
        <button class="landing__button" type="button">Заказать сайт</button>
        <div class="landing__bottom-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки" class="landing__mouse-icon" />
            <p class="landing__text">Прокрутите вниз</p>
        </div>
    </section>
    <section class="landing-info">
        <div class="landing-info__container">
            <h3 class="landing-info__heading"><?php the_field('landing_page_title'); ?></h3>
            <p class="landing-info__description"><?php the_field('landing_page_desc_one'); ?></p>
            <h4 class="landing-info__subheading"><?php the_field('landing_page_subtitle'); ?></h4>
            <p class="landing-info__subdescription">
				<?php the_field('landing_page_desc_two'); ?>
			</p>
            <?php if (have_rows('landing_page_list')): ?>
				<ul class="landing-info__list">
                    <?php while (have_rows('landing_page_list')): the_row();
                        $item = get_sub_field('landing_page_item');
                        ?>
						<li class="landing-info__list-item"><?php echo $item; ?></li>
                    <?php endwhile; ?>
				</ul>
            <?php endif; ?>

            <p class="landing-info__subdescription">
              <?php the_field('landing_page_desc_three'); ?>
            </p>
        </div>
    </section>
    <?php include 'section-landing.php'?>
</div>

<?php
get_footer();

