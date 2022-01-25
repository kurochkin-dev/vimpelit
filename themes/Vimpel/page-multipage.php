<?php
/*
Template Name: Создание многостраничного (корпоративного) сайта "под ключ"
*/
?>

<?php
get_header();
?>
	<div class="multipage">
		<section class="multipage__image-container">
			<h1 class="multipage__heading">Создание многостраничного (корпоративного) сайта "под ключ"</h1>
			<p class="multipage__subheading">Проектирование и разработка многостраничного сайта в Санкт-Петербурге</p>
			<button class="multipage__button" type="button">Заказать сайт</button>
			<div class="multipage__bottom-container">
				<a href="#multipage-info" class="scrolldown">
					<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
						<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
						<path class="down" d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z" fill="white"/>
					</svg>
				</a>
				<p class="multipage__text">Прокрутите вниз</p>
			</div>
		</section>
		<section id="multipage-info" class="multipage-info">
			<div class="multipage-info__container">
				<h3 class="multipage-info__heading"><?php the_field('multipage_title'); ?></h3>
				<p class="multipage-info__description">
                    <?php the_field('multipage_desc_one'); ?>
				</p>
				<p class="multipage-info__description"><?php the_field('multipage_subtitle'); ?></p>

                <?php if (have_rows('multipage_list')): ?>
					<ul class="multipage-info__list-container">
                        <?php while (have_rows('multipage_list')): the_row();
                            $item = get_sub_field('multipage_item');
                            ?>
							<li class="multipage-info__list"><?php echo $item; ?></li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
				<p class="multipage-info__description">
                    <?php the_field('multipage_desc_two'); ?>
					Стоимость разработки вашего корпоративного сайта согласуется до старта
					работы и не может быть увеличена в одностороннем порядке. Итоговая цена
					зависит от размеров сайта и технических решений, задействованных при разработке.
				</p>
			</div>
		</section>
        <?php include 'inc/section-page-form.php' ?>
		<div class="table">
			<div class="animation">
				<img alt="Изображение дизайна"
					 src="<?php echo get_template_directory_uri(); ?>/assets/images/animation-main.jpg"
					 class="animation__img-main animation__img_main">
				<img alt="Изображение дизайна"
					 src="<?php echo get_template_directory_uri(); ?>/assets/images/animation-main.jpg"
					 class="animation__img animation__img_main">
				<div class="animation__text-container">
					<p class="animation__text">Система управления сайтом</p>
				</div>
			</div>
			<div class="table__container">
                <?php the_field('multipage_tables'); ?>
			</div>
		</div>
	</div>


<?php
get_footer();
