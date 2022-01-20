<?php
/*
Template Name: Создание сайта-каталога под ключ
*/
?>

<?php
get_header();
?>

	<div class="catalog">
		<section class="catalog__image-container">
			<h2 class="catalog__heading">СОЗДАНИЕ САЙТА&#8209;КАТАЛОГА ПОД КЛЮЧ</h2>
			<p class="catalog__subheading">Проектирование и разработка сайта-каталога в Санкт-Петербурге</p>
			<button class="catalog__button" type="button">Заказать сайт</button>
			<div class="catalog__bottom-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
					 class="catalog__mouse-icon"/>
				<p class="catalog__text">Прокрутите вниз</p>
			</div>
		</section>
		<section class="catalog-info">
			<div class="catalog-info__container">
				<h3 class="catalog-info__heading"><?php the_field('catalog_title'); ?></h3>
				<p class="catalog-info__description">
                    <?php the_field('catalog_desc_one'); ?>
				</p>
				<p class="catalog-info__description"><?php the_field('catalog_subtitle'); ?></p>

                <?php if (have_rows('catalog_list')): ?>
					<ul class="catalog-info__list-container">
                        <?php while (have_rows('catalog_list')): the_row();
                            $item = get_sub_field('catalog_item');
                            ?>
							<li class="catalog-info__list"><?php echo $item; ?></li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
				<p class="catalog-info__description">
                    <?php the_field('catalog_desc_two'); ?>
				</p>
			</div>
		</section>
		<div class="catalog-page-form">
			<div class="catalog-page-form__price">
				<p class="catalog-page-form__price-heading"><?php the_field('catalog_title_two'); ?></p>
                <?php if (have_rows('catalog_list_two')): ?>
					<ul class="catalog-page-form__price-list-container">
                        <?php while (have_rows('catalog_list_two')): the_row();
                            $item = get_sub_field('catalog_item_two');
                            ?>
							<li class="catalog-page-form__price-list"><?php echo $item; ?></li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
				<p class="catalog-page-form__price-cost"><?php the_field('catalog_price'); ?></p>
			</div>
			<div class="catalog-page-form__form">
				<?php echo do_shortcode('[contact-form-7 id="344" title="Форма на странице Создание сайта-каталога"]') ?>
<!--				<div class="catalog-page-form__form-container">-->
<!--					<div class="catalog-page-form__radio-container">-->
<!--						<p class="catalog-page-form__question">Дополнительные услуги</p>-->
<!--						<div class="catalog-page-form__radio-buttons-container">-->
<!--							<div class="catalog-page-form__radio">-->
<!--								<input id="admin" type="radio" name="variant" value="Администрирование сайта" checked/>-->
<!--								<label for="admin">Администрирование сайта</label>-->
<!--							</div>-->
<!--							<div class="catalog-page-form__radio">-->
<!--								<input id="copywriting" type="radio" name="variant" value="Копирайтинг"/>-->
<!--								<label for="copywriting">Копирайтинг</label>-->
<!--							</div>-->
<!--							<div class="catalog-page-form__radio">-->
<!--								<input id="logoDev" type="radio" name="variant" value="Разработка логотипа"/>-->
<!--								<label for="logoDev">Разработка логотипа</label>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="catalog-page-form__inputs-container">-->
<!--						<p class="catalog-page-form__inputs-heading">Оставьте заявку и получите консультацию-->
<!--							специалиста</p>-->
<!--						<div class="catalog-page-form__inputs-main-container">-->
<!--							<div class="catalog-page-form__input-container">-->
<!--								<input type="text" class="catalog-page-form__input" id="catalog-name-input" name="name"-->
<!--									   value='' min="2" max="50" placeholder="Ваше имя" pattern="[A-Za-zа-яёА-ЯЁ -]{1,}"-->
<!--									   required/>-->
<!--								<span id="catalog-name-input-error" class="catalog-page-form-form__input_error"></span>-->
<!--							</div>-->
<!--							<div class="catalog-page-form__input-container">-->
<!--								<input type="text" class="catalog-page-form__input" id="catalog-number-input"-->
<!--									   name="number" value='' min="3" max="20" placeholder="Ваш телефон"-->
<!--									   pattern='^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$' required/>-->
<!--								<span id="catalog-number-input-error"-->
<!--									  class="catalog-page-form-form__input_error"></span>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="catalog-page-form__submit-container">-->
<!--						<button type="submit" class="catalog-page-form__submit-button">Получить консультацию</button>-->
<!--						<div class="catalog-page-form__under-submit-button-container">-->
<!--							<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/check.svg"-->
<!--								 alt="Иконка галочки" class="catalog-page-form__under-submit-button-check"/>-->
<!--							<p class="catalog-page-form__under-submit-button-text">Принимаю пользовательское-->
<!--								соглашение</p>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
			</div>
		</div>
		<section class="days">
			<div class="days__container">
				<h3 class="days__heading"><?php the_field('catalog_title_three'); ?></h3>
				<div class="days__items-container">
                    <?php if (have_rows('catalog_icons')): ?>
                        <?php while (have_rows('catalog_icons')): the_row();
                            $img = get_sub_field('catalog_img');
                            $term = get_sub_field('catalog_term');
                            $service = get_sub_field('catalog_service');
                            ?>
							<div class="days__item-container">
								<img class="days__img"
									 src="<?php echo $img; ?>"
									 alt="Иконка услуги"/>
								<div class="days__info-container">
									<p class="days__value"><?php echo $term; ?></p>
									<p class="days__type"><?php echo $service; ?></p>
								</div>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
				<div class="days__items-container">
                    <?php if (have_rows('catalog_icons_two')): ?>
                        <?php while (have_rows('catalog_icons_two')): the_row();
                            $img = get_sub_field('catalog_img_two');
                            $term = get_sub_field('catalog_term_two');
                            $service = get_sub_field('catalog_service_two');
                            ?>
							<div class="days__item-container">
								<img class="days__img"
									 src="<?php echo $img; ?>"
									 alt="Иконка услуги"/>
								<div class="days__info-container">
									<p class="days__value"><?php echo $term; ?></p>
									<p class="days__type"><?php echo $service; ?></p>
								</div>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</section>
	</div>

<?php
get_footer();
