<?php
/*
Template Name: Seo-услуги под ключ
*/
?>

<?php get_header(); ?>

	<div class="seo">
		<section class="seo__image-container">
			<h1 class="seo__heading">Seo-услуги под ключ</h1>
			<p class="seo__subheading">Оказание качественных SEO-услуг под ключ в Санкт-Петербурге</p>
			<button class="seo__button" type="button">Получить консультацию</button>
			<div class="seo__bottom-container">
				<a href="#info-seo" class="scrolldown">
					<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
						<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
						<path class="down" d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z" fill="white"/>
					</svg>
				</a>
				<p class="seo__text">Прокрутите вниз</p>
			</div>
		</section>
		<section id="info-seo" class="info-seo">
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
        <?php include 'inc/section-seo.php' ?>
	</div>

<?php get_footer();

