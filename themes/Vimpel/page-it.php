<?php
/*
Template Name: it
*/
?>

<?php
get_header();
?>


	<section class="it__image-container">
		<h1 class="it__heading">IT сервис</h1>
		<button class="it__button" type="button">
			Получить консультацию
		</button>
		<div class="it__bottom-container">
			<a href="#about-it" class="scrolldown">
				<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
					<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
					<path class="down"
						  d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z"
						  fill="white"/>
				</svg>
			</a>
			<p class="it__text">Прокрутите вниз</p>
		</div>
	</section>
	<section id="about-it" class="about-it">
		<img class="about-it__img"
			 src="<?php the_field('it-service_img'); ?>"
			 alt="Иллюстрация об айти"/>
		<div class="about-it__container">
			<h3 class="about-it__heading"><?php the_field('it-service_page_title'); ?></h3>
            <?php if (have_rows('it-service_descrs')): ?>
                <?php while (have_rows('it-service_descrs')): the_row();
                    $desc = get_sub_field('it-service_desc');
                    ?>
					<p class="about-it__description"><?php echo $desc; ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</section>
	<section id="service" class="service-it">
		<h3 class="service-it__heading"><?php the_field('it-service_sub_serv_title'); ?></h3>
		<div class="service-it__container">
			<div class="service-it__description-container">
				<p class="service-it__description">
                    <?php the_field('it-service_sub_serve_desc'); ?>
				</p>
                <?php if (have_rows('it-service_sub_serve_list')): ?>
					<ul class="service-it__list">
                        <?php while (have_rows('it-service_sub_serve_list')): the_row();
                            $item = get_sub_field('it-service_sub_serve_item');
                            ?>
							<li class="service-it__list-item"><?php echo $item; ?></li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
			</div>
			<img class="service-it__img"
				 src="<?php the_field('it-service_sub_serve_img'); ?>"
				 alt="Иллюстрация абонентского обслуживания"/>
		</div>
	</section>
	<section class="animation-table-it">
		<div class="animation-table-it__main-container">
			<img src="<?php the_field('it-service_price_table_default_img_one'); ?>"
				 alt="Изображение монитора" class="animation-table-it__img animation-table-it__img_desktop-def"/>
			<img src="<?php the_field('it-service_price_table_default_img_one'); ?>"
				 alt="Изображение монитора" class="animation-table-it__img animation-table-it__img_desktop"/>
			<div class="animation-table-it__container">
				<h3 class="animation-table-it__heading"><?php the_field('it-service_price_title_one'); ?></h3>
				<div class="animation-table">
                    <?php if (have_rows('it-service_price_table_titles_one')): ?>
						<div class="animation-table__row">
                            <?php while (have_rows('it-service_price_table_titles_one')): the_row();
                                $title = get_sub_field('it-service_price_table_title_one');
                                ?>
								<div class="animation-table__column animation-table__column_heading">
									<p class="animation-table__text animation-table__text_heading"><?php echo $title; ?></p>
								</div>
                            <?php endwhile; ?>
						</div>
                    <?php endif; ?>

                    <?php if (have_rows('it-service_price_table_quantities_one')): ?>
                        <?php while (have_rows('it-service_price_table_quantities_one')): the_row();
                            $quantity = get_sub_field('it-service_price_table_quantity_one');
                            $price = get_sub_field('it-service_price_table_price_one');
                            $img = get_sub_field('it-service_price_table_img_one');
                            ?>
							<div class="animation-table__row">
								<div class="animation-table__column">
									<p data-filename="<?php echo $img; ?>"
									   class="animation-table__text animation-table__text_links"><?php echo $quantity; ?></p>
								</div>
								<div class="animation-table__column">
									<p class="animation-table__text"><?php echo $price; ?></p>
								</div>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
		<div class="animation-table-it__main-container">
			<img src="<?php the_field('it-service_price_table_default_img_two'); ?>"
				 alt="Изображение сервера"
				 class="animation-table-it__img-left-direction animation-table-it__img-left-direction_default-server-def"/>
			<img src="<?php the_field('it-service_price_table_default_img_two'); ?>"
				 alt="Изображение сервера"
				 class="animation-table-it__img-left-direction animation-table-it__img-left-direction_default-server"/>
			<div class="animation-table-it__container animation-table-it__container_left-direction">
				<h3 class="animation-table-it__heading"><?php the_field('it-service_price_title_two'); ?></h3>
				<div class="animation-table">
                    <?php if (have_rows('it-service_price_table_titles_two')): ?>
						<div class="animation-table__row">
                            <?php while (have_rows('it-service_price_table_titles_two')): the_row();
                                $title = get_sub_field('it-service_price_table_title_two');
                                ?>
								<div class="animation-table__column animation-table__column_heading">
									<p class="animation-table__text animation-table__text_heading"><?php echo $title; ?></p>
								</div>
                            <?php endwhile; ?>
						</div>
                    <?php endif; ?>

                    <?php if (have_rows('it-service_price_table_names_two')): ?>
                        <?php while (have_rows('it-service_price_table_names_two')): the_row();
                            $name = get_sub_field('it-service_price_table_name_two');
                            $price = get_sub_field('it-service_price_table_price_two');
                            $img = get_sub_field('it-service_price_table_img_two');
                            ?>
							<div class="animation-table__row">
								<div class="animation-table__column">
									<p data-server="<?php echo $img; ?>"
									   class="animation-table__text animation-table__text_links"><?php echo $name; ?></p>
								</div>
								<div class="animation-table__column">
									<p class="animation-table__text"><?php echo $price; ?></p>
								</div>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
		<div class="animation-table-it__main-container">
			<img src="<?php the_field('it-service_price_table_default_img_three'); ?>"
				 alt="Изображение монитора"
				 class="animation-table-it__img animation-table-it__img_default-administrate-def"/>
			<img src="<?php the_field('it-service_price_table_default_img_three'); ?>"
				 alt="Изображение монитора"
				 class="animation-table-it__img animation-table-it__img_default-administrate"/>
			<div class="animation-table-it__container">
				<h3 class="animation-table-it__heading"><?php the_field('it-service_price_title_three'); ?></h3>
				<div class="animation-table">
                    <?php if (have_rows('it-service_price_table_titles_three')): ?>
						<div class="animation-table__row">
                            <?php while (have_rows('it-service_price_table_titles_three')): the_row();
                                $title = get_sub_field('it-service_price_table_title_three');
                                ?>
								<div class="animation-table__column animation-table__column_heading">
									<p class="animation-table__text animation-table__text_heading"><?php echo $title; ?></p>
								</div>
                            <?php endwhile; ?>
						</div>
                    <?php endif; ?>

                    <?php if (have_rows('it-service_price_table_names_three')): ?>
                        <?php while (have_rows('it-service_price_table_names_three')): the_row();
                            $name = get_sub_field('it-service_price_table_name_three');
                            $price = get_sub_field('it-service_price_table_price_three');
                            $img = get_sub_field('it-service_price_table_img_three');
                            ?>
							<div class="animation-table__row">
								<div class="animation-table__column">
									<p data-one-c="<?php echo $img; ?>"
									   class="animation-table__text animation-table__text_links"><?php echo $name; ?></p>
								</div>
								<div class="animation-table__column">
									<p class="animation-table__text"><?php echo $price; ?></p>
								</div>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
		<div class="animation-table-it__main-container">
			<img src="<?php the_field('it-service_price_table_default_img_four'); ?>"
				 alt="Изображение телефона"
				 class="animation-table-it__img-left-direction animation-table-it__img-left-direction_phone-default-def"/>
			<img src="<?php the_field('it-service_price_table_default_img_four'); ?>"
				 alt="Изображение телефона"
				 class="animation-table-it__img-left-direction animation-table-it__img-left-direction_phone-default"/>
			<div class="animation-table-it__container animation-table-it__container_left-direction">
				<h3 class="animation-table-it__heading"><?php the_field('it-service_price_title_four'); ?></h3>
				<div class="animation-table">
                    <?php if (have_rows('it-service_price_table_titles_four')): ?>
						<div class="animation-table__row">
                            <?php while (have_rows('it-service_price_table_titles_four')): the_row();
                                $title = get_sub_field('it-service_price_table_title_four');
                                ?>
								<div class="animation-table__column animation-table__column_heading">
									<p class="animation-table__text animation-table__text_heading"><?php echo $title; ?></p>
								</div>
                            <?php endwhile; ?>
						</div>
                    <?php endif; ?>

                    <?php if (have_rows('it-service_price_table_names_four')): ?>
                        <?php while (have_rows('it-service_price_table_names_four')): the_row();
                            $name = get_sub_field('it-service_price_table_name_four');
                            $price = get_sub_field('it-service_price_table_price_four');
                            $img = get_sub_field('it-service_price_table_img_four');
                            ?>
							<div class="animation-table__row">
								<div class="animation-table__column">
									<p data-phone="<?php echo $img; ?>"
									   class="animation-table__text animation-table__text_links"><?php echo $name; ?></p>
								</div>
								<div class="animation-table__column">
									<p class="animation-table__text"><?php echo $price; ?></p>
								</div>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
		<div class="animation-table-it__main-container">
			<img src="<?php the_field('it-service_price_table_default_img_five'); ?>"
				 alt="Изображение монитора"
				 class="animation-table-it__img animation-table-it__img_default-user-def"/>
			<img src="<?php the_field('it-service_price_table_default_img_five'); ?>"
				 alt="Изображение монитора"
				 class="animation-table-it__img animation-table-it__img_default-user"/>
			<div class="animation-table-it__container">
				<h3 class="animation-table-it__heading"><?php the_field('it-service_price_title_five'); ?></h3>
				<div class="animation-table">
                    <?php if (have_rows('it-service_price_table_titles_five')): ?>
						<div class="animation-table__row">
                            <?php while (have_rows('it-service_price_table_titles_five')): the_row();
                                $title = get_sub_field('it-service_price_table_title_five');
                                ?>
								<div class="animation-table__column animation-table__column_heading">
									<p class="animation-table__text animation-table__text_heading"><?php echo $title; ?></p>
								</div>
                            <?php endwhile; ?>
						</div>
                    <?php endif; ?>

                    <?php if (have_rows('it-service_price_table_names_five')): ?>
                        <?php while (have_rows('it-service_price_table_names_five')): the_row();
                            $name = get_sub_field('it-service_price_table_name_five');
                            $price = get_sub_field('it-service_price_table_price_five');
                            $img = get_sub_field('it-service_price_table_img_five');
                            ?>
							<div class="animation-table__row">
								<div class="animation-table__column">
									<p data-user="<?php echo $img; ?>"
									   class="animation-table__text animation-table__text_links"><?php echo $name; ?></p>
								</div>
								<div class="animation-table__column">
									<p class="animation-table__text"><?php echo $price; ?></p>
								</div>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section id="one-time" class="catalog-page-form">
		<div class="it-form__price">
			<h4 class="catalog-page-form__price-heading"><?php the_field('it-service_sub_one_serve_title'); ?></h4>
            <?php if (have_rows('it-service_sub_one_serve_list')): ?>
				<ul class="catalog-page-form__price-list-container">
                    <?php while (have_rows('it-service_sub_one_serve_list')): the_row();
                        $item = get_sub_field('it-service_sub_one_serve_item');
                        ?>
						<li class="catalog-page-form__price-list"><?php echo $item; ?></li>
                    <?php endwhile; ?>
				</ul>
            <?php endif; ?>
			<p class="catalog-page-form__price-cost"><?php the_field('it-service_sub_one_serve_price'); ?></p>
		</div>
		<div class="catalog-page-form__form">
            <?php echo do_shortcode('[contact-form-7 id="62" title="Форма Разовые IT-услуги"]') ?>
		</div>
	</section>
	<section class="price-table-it">
		<div class="price-table-it__container">
			<div class="table-it">
				<h2 class="price-table-it__heading">стоимость разовых it-услуг</h2>
                <?php the_field('it-service_table_one_serve_price'); ?>
			</div>
		</div>
	</section>


<?php
get_footer();
