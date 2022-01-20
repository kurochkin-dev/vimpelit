<?php
/*
Template Name: Seo-услуги под ключ
*/
?>

<?php
get_header();
?>

	<div class="seo">
		<section class="seo__image-container">
			<h2 class="seo__heading">seo-услуги под ключ</h2>
			<p class="seo__subheading">Оказание качественных SEO-услуг под ключ в Санкт&#8209;Петербурге</p>
			<button class="seo__button" type="button">Получить консультацию</button>
			<div class="seo__bottom-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
					 class="seo__mouse-icon"/>
				<p class="seo__text">Прокрутите вниз</p>
			</div>
		</section>
		<section class="info-seo">
			<div class="info-seo__container">
				<h3 class="info-seo__heading"><?php the_field('seo_title'); ?></h3>

                <?php if (have_rows('seo_descrs')): ?>
                    <?php while (have_rows('seo_descrs')): the_row();
                        $desc = get_sub_field('seo_desc');
                        ?>
						<p class="info-seo__description"><?php echo $desc; ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
				<p class="info-seo__description"><?php the_field('seo_subtitle'); ?>Что вы получите, обратившись к
					нам:</p>
                <?php if (have_rows('seo_list')): ?>
					<ul class="info-seo__list">
                        <?php while (have_rows('seo_list')): the_row();
                            $item = get_sub_field('seo_item');
                            ?>
							<li class="info-seo__list-item"><?php echo $item; ?></li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
			</div>
		</section>
		<div class="catalog-page-form">
			<div class="seo-form__price">
				<p class="seo-page-form__price-heading"><?php the_field('seo_subtitle_two'); ?></p>
				<p class="seo-page-form__price-cost"><?php the_field('seo_price'); ?></p>
			</div>
			<div class="catalog-page-form__form">
                <?php echo do_shortcode('[contact-form-7 id="345" title="Форма со страницы SEO услуги под ключ"]') ?>
			</div>
		</div>
        <?php include 'section-seo.php' ?>
	</div>

<?php
get_footer();

