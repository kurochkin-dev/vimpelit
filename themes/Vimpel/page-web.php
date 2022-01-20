<?php
/*
Template Name: web
*/
?>

<?php
get_header();
?>

	<div class="web">
		<section class="web__image-container">
			<h2 class="web__heading">WEB СТУДИЯ</h2>
			<button class="web__button" type="button">
				Получить консультацию
			</button>
			<div class="web__bottom-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
					 class="web__mouse-icon"/>
				<p class="web__text">Прокрутите вниз</p>
			</div>
		</section>
		<section class="services">
			<h3 class="services__heading"><?php the_field('web_page_type_of_sites_title_one'); ?></h3>
			<div class="grid">

                <?php if (have_rows('web_page_type_of_sites')): ?>
                    <?php while (have_rows('web_page_type_of_sites')): the_row();
                        $title = get_sub_field('web_page_type_of_site_subtitle');
                        $desc = get_sub_field('web_page_type_of_site');
                        ?>
						<div class="grid__item">
							<h4 class="grid__heading"><?php echo $title; ?></h4>
							<p class="grid__description"><?php echo $desc; ?></p>
						</div>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</section>
        <?php include 'section-stages.php' ?>
		<section class="history-web">
			<div class="history-web__container">
				<h3 class="history-web__heading"><?php the_field('web_page_history_title'); ?></h3>
				<img class="history-web__img history-web__img_mobile"
					 src="<?php the_field('web_page_history_img'); ?>"
					 alt="Иллюстрация совещания"/>
				<div class="history-web__text-container">
                    <?php if (have_rows('web_page_history_descrs')): ?>
                        <?php while (have_rows('web_page_history_descrs')): the_row();
                            $desc = get_sub_field('web_page_history_desc');
                            ?>
							<p class="history-web__text"><?php echo $desc; ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
				<img class="history-web__line"
					 src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/line-of-history.svg"
					 alt="Линия истории"/>
			</div>
			<img class="history-web__img"
				 src="<?php the_field('web_page_history_img'); ?>"
				 alt="Иллюстрация совещания"/>
		</section>
        <?php
        include 'section-page-form.php';
        ?>
		<section class="portfolio-slider">
			<div class="portfolio-slider__container">
				<h2 class="portfolio-slider__heading">НАШИ ПОСЛЕДНИЕ РАБОТЫ</h2>
				<div class="portfolio-slider__wrap">

                    <?php if (have_rows('web_page_slides')): ?>
                        <?php while (have_rows('web_page_slides')): the_row();
							$link = get_sub_field('web_page_slide_link');
							$classForLink = get_sub_field('web_page_slide_class_link');
							$img = get_sub_field('web_page_slide_img');
							$classForOverlay = get_sub_field('web_page_slide_class_overlay');
							$title = get_sub_field('web_page_slide_title');
                            $desc = get_sub_field('web_page_slide_desc');
                            ?>
							<a href="<?php echo $link; ?>" class="carousel__container <?php echo $classForLink; ?>">
								<div class="carousel-overlay">
									<img src="<?php echo $img; ?>"
										 alt="Иконка сайта"
										 class="carousel-overlay__icon <?php echo $classForOverlay; ?>"/>
									<h3 class="carousel-overlay__heading"><?php echo $title; ?></h3>
									<p class="carousel-overlay__subheading"><?php echo $desc; ?></p>
								</div>
							</a>
                        <?php endwhile; ?>
                    <?php endif; ?>


<!--					<a href="/stroj-snab" class="carousel__container carousel__container_stroj-snab">-->
<!--						<div class="carousel-overlay">-->
<!--							<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/stroi-snab-icon.svg"-->
<!--								 alt="Иконка Строй Снаб"-->
<!--								 class="carousel-overlay__icon carousel-overlay__icon_stroi-snab"/>-->
<!--							<h3 class="carousel-overlay__heading">СтройСнаб</h3>-->
<!--							<p class="carousel-overlay__subheading">Компания осуществляет строительные работы</p>-->
<!--						</div>-->
<!--					</a>-->
<!--					<a href="/voleks" class="carousel__container carousel__container_voleks">-->
<!--						<div class="carousel-overlay">-->
<!--							<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/voleks-icon.svg"-->
<!--								 alt="Иконка Волекс" class="carousel-overlay__icon carousel-overlay__icon_voleks"/>-->
<!--							<h3 class="carousel-overlay__heading">Волекс</h3>-->
<!--							<p class="carousel-overlay__subheading">Продажа промышленного инструмента абразивных-->
<!--								материалов</p>-->
<!--						</div>-->
<!--					</a>-->
<!--					<a href="/ar-bellos" class="carousel__container carousel__container_ar-bellos">-->
<!--						<div class="carousel-overlay">-->
<!--							<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/arbellos-icon.svg"-->
<!--								 alt="Иконка Арбеллос" class="carousel-overlay__icon carousel-overlay__icon_arbellos"/>-->
<!--							<h3 class="carousel-overlay__heading">ARbellos</h3>-->
<!--							<p class="carousel-overlay__subheading">Инсталяция светопрозрачных решений</p>-->
<!--						</div>-->
<!--					</a>-->
<!--					<a href="/yur-konsul" class="carousel__container carousel__container_yur-konsul">-->
<!--						<div class="carousel-overlay">-->
<!--							<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/ur-consul-icon.svg"-->
<!--								 alt="Иконка Юр Консул"-->
<!--								 class="carousel-overlay__icon carousel-overlay__icon_ur-konsul"/>-->
<!--							<h3 class="carousel-overlay__heading">ЮрКонсул</h3>-->
<!--							<p class="carousel-overlay__subheading">Реализация деятельности ТСН(Ж), ЖСК и УК по-->
<!--								управлению недвижимым имуществом</p>-->
<!--						</div>-->
<!--					</a>-->
<!--					<a href="/ost-med-consult" class="carousel__container carousel__container_ost-med-consult">-->
<!--						<div class="carousel-overlay">-->
<!--							<img-->
<!--								src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/ost-med-consalt-icon.svg"-->
<!--								alt="Иконка Ост Мед Консалт"-->
<!--								class="carousel-overlay__icon carousel-overlay__icon_ost-meb-consalt"/>-->
<!--							<h3 class="carousel-overlay__heading">Остмедконсалт</h3>-->
<!--							<p class="carousel-overlay__subheading">Многопрофильная клиника: эстетическая медицина и-->
<!--								пластическая хирургия</p>-->
<!--						</div>-->
<!--					</a>-->
<!--					<a href="/la-mia-borsa" class="carousel__container carousel__container_la-mia-borsa">-->
<!--						<div class="carousel-overlay">-->
<!--							<img-->
<!--								src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/la-mia-borsa-icon.svg"-->
<!--								alt="Иконка Ля Миа Борса"-->
<!--								class="carousel-overlay__icon carousel-overlay__icon_la-mia-borsa"/>-->
<!--							<h3 class="carousel-overlay__heading">La mia Borsa</h3>-->
<!--							<p class="carousel-overlay__subheading">Итальянские сумки в <br/> Санкт-Петербурге</p>-->
<!--						</div>-->
<!--					</a>-->
				</div>
			</div>
		</section>
	</div>

<?php
get_footer();
