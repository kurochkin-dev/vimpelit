<?php
/*
Template Name: it
*/
?>

<?php
get_header();
?>


	<section class="it__image-container">
		<h2 class="it__heading">IT СЕРВИС</h2>
		<button class="it__button" type="button">
			Получить консультацию
		</button>
		<div class="it__bottom-container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
				 class="it__mouse-icon"/>
			<p class="it__text">Прокрутите вниз</p>
		</div>
	</section>
	<section class="about-it">
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
			<!--				<div class="catalog-page-form__form-container">-->
			<!--					<div class="catalog-page-form__radio-container">-->
			<!--						<p class="catalog-page-form__question">Как удобнее связаться с Вами?</p>-->
			<!--						<div class="catalog-page-form__radio-buttons-container">-->
			<!--							<div class="catalog-page-form__radio">-->
			<!--								<input id="phoneInputItForm" type="radio" name="variant" value="Телефон" checked/>-->
			<!--								<label for="phoneInputItForm">Телефон</label>-->
			<!--							</div>-->
			<!--							<div class="catalog-page-form__radio">-->
			<!--								<input id="whatsAppInputItForm" type="radio" name="variant" value="WhatsApp"/>-->
			<!--								<label for="whatsAppInputItForm">WhatsApp</label>-->
			<!--							</div>-->
			<!--							<div class="catalog-page-form__radio">-->
			<!--								<input id="telegramInputItForm" type="radio" name="variant" value="Telegram"/>-->
			<!--								<label for="telegramInputItForm">Telegram</label>-->
			<!--							</div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--					<div class="catalog-page-form__inputs-container">-->
			<!--						<p class="catalog-page-form__inputs-heading">Оставьте заявку и получите консультацию-->
			<!--							специалиста</p>-->
			<!--						<div class="catalog-page-form__inputs-main-container">-->
			<!--							<div class="catalog-page-form__input-container">-->
			<!--								<input-->
			<!--									type="text"-->
			<!--									class="catalog-page-form__input"-->
			<!--									id="it-name-input"-->
			<!--									name="name"-->
			<!--									value=""-->
			<!--									minLength="2"-->
			<!--									maxLength="50"-->
			<!--									placeholder="Ваше имя"-->
			<!--									pattern="[A-Za-zа-яёА-ЯЁ -]{1,}"-->
			<!--									required-->
			<!--								/>-->
			<!--								<span id="it-name-input-error" class="catalog-page-form-form__input_error"></span>-->
			<!--							</div>-->
			<!--							<div class="catalog-page-form__input-container">-->
			<!--								<input-->
			<!--									type="text"-->
			<!--									class="catalog-page-form__input"-->
			<!--									id="it-number-input"-->
			<!--									name="number"-->
			<!--									value=""-->
			<!--									minLength="3"-->
			<!--									maxLength="20"-->
			<!--									placeholder="Ваш телефон"-->
			<!--									pattern='^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$'-->
			<!--									required-->
			<!--								/>-->
			<!--								<span id="it-number-input-error" class="catalog-page-form-form__input_error"></span>-->
			<!--							</div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--					<div class="catalog-page-form__submit-container">-->
			<!--						<button type="submit" class="catalog-page-form__submit-button">Получить консультацию</button>-->
			<!--						<div class="catalog-page-form__under-submit-button-container">-->
			<!--							<img src="-->
            <?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/check.svg"-->
			<!--								 alt="Иконка галочки"-->
			<!--								 class="catalog-page-form__under-submit-button-check"/>-->
			<!--							<p class="catalog-page-form__under-submit-button-text">Принимаю пользовательское-->
			<!--								соглашение</p>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
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
