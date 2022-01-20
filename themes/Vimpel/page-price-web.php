<?php
/*
Template Name: Цены на услуги web студии
*/
?>

<?php
get_header();
?>

	<div class="price-web">
		<section class="price-web__image-container">
			<h2 class="price-web__heading">цены на услуги web студии</h2>
			<p class="price-web__subheading">Ознакомьтесь с перечнем наших услуг, а также их стоимостью</p>
			<button class="price-web__button" type="button">Получить консультацию</button>
			<div class="price-web__bottom-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
					 class="price-web__mouse-icon"/>
				<p class="price-web__text">Прокрутите вниз</p>
			</div>
		</section>
		<h3 class="price-web__tables-heading">СТОИМОСТЬ УСЛУГ</h3>
		<h4 class="price-web__table-heading">ИНТЕРНЕТ-МАГАЗИН</h4>
		<section class="price-table-shop">
			<div class="price-table-shop__main-container">
				<div class="price-table-shop__cards-container">
                    <?php if (get_field('web-price_cards_one')): ?>
                        <?php while (has_sub_field('web-price_cards_one')) : ?>
                            <?php
                            $title = get_sub_field('web-price_card_one');
                            $price = get_sub_field('web-price_card_price_one');
                            ?>
							<div class="card-shop">
								<h5 class="card-shop__heading"><?php echo $title; ?></h5>
								<ul class="card-shop__list">
                                    <?php if (get_sub_field('web-price_card_list_one')): ?>
                                        <?php while (has_sub_field('web-price_card_list_one')) : ?>
                                            <?php
                                            $item = get_sub_field('web-price_card_item_one');
                                            ?>
											<li class="card-shop__item"><?php echo $item; ?></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
								</ul>
								<p class="card__value"><?php echo $price; ?></p>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
				<div class="price-table-shop__cards-container">
                    <?php if (get_field('web-price_cards_two')): ?>
                        <?php while (has_sub_field('web-price_cards_two')) : ?>
                            <?php
                            $title = get_sub_field('web-price_card_two');
                            $price = get_sub_field('web-price_card_price_two');
                            ?>
							<div class="card-shop">
								<h5 class="card-shop__heading"><?php echo $title; ?></h5>
								<ul class="card-shop__list">
                                    <?php if (get_sub_field('web-price_card_list_two')): ?>
                                        <?php while (has_sub_field('web-price_card_list_two')) : ?>
                                            <?php
                                            $item = get_sub_field('web-price_card_item_two');
                                            ?>
											<li class="card-shop__item"><?php echo $item; ?></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
								</ul>
								<p class="card__value"><?php echo $price; ?></p>
							</div>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</section>
		<h4 class="price-web__table-heading">САЙТ-ВИЗИТКА</h4>
        <?php include 'section-business-card.php' ?>
		<h4 class="price-web__table-heading">LANDING PAGE</h4>
        <?php include 'section-landing.php' ?>
		<h4 class="price-web__table-heading">SEO-УСЛУГИ</h4>
        <?php include 'section-seo.php' ?>
		<h4 class="price-web__table-heading">МНОГОСТРАНИЧНЫЙ (КОРПОРАТИВНЫЙ) САЙТ</h4>
		<section class="price-table-multipage">
			<div class="price-table-multipage__container price-table-multipage__container_web">
                <?php if (get_field('web-price_cards_three')): ?>
                    <?php while (has_sub_field('web-price_cards_three')) : ?>

                        <?php
                        $title = get_sub_field('web-price_card_title_three');
                        $price = get_sub_field('web-price_card_price_three');
                        ?>
						<div class="price-table__section price-table__section-multipage">
							<div
								class="price-table__heading-container price-table-multipage__heading-container price-table-multipage__heading-container-first">
								<h5 class="price-table__heading">
                                    <?php echo $title; ?><br>
									<span class="price-table__heading-span"><?php echo $price; ?></span>
								</h5>
							</div>
						</div>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
			<div class="price-web__table-description-container">
				<p class="price-web__table-description">*Оплата осуществляется в 2 этапа (предоплата 50%)</p>
			</div>
		</section>
		<h4 class="price-web__table-heading">САЙТ-КАТАЛОГ</h4>
		<section class="price-table-catalog">
			<div class="price-table-catalog__container">
				<div class="price-table-catalog__container-first">
					<h5 class="price-table-catalog__heading">
						<?php the_field('web-price_title'); ?><br>
						<span class="price-table-catalog__cost"><?php the_field('web-price_price'); ?></span>
					</h5>
				</div>
				<div class="price-table-catalog__container-second">

                    <?php if (have_rows('web-price_list_one')): ?>
						<ul class="price-table-catalog__list">
                            <?php while (have_rows('web-price_list_one')): the_row();
                                $item = get_sub_field('web-price_item_one');
                                ?>
								<li class="price-table-catalog__list-item"><?php echo $item; ?></li>
                            <?php endwhile; ?>
						</ul>
                    <?php endif; ?>

                    <?php if (have_rows('web-price_list_two')): ?>
						<ul class="price-table-catalog__list">
                            <?php while (have_rows('web-price_list_two')): the_row();
                                $item = get_sub_field('web-price_item_two');
                                ?>
								<li class="price-table-catalog__list-item"><?php echo $item; ?></li>
                            <?php endwhile; ?>
						</ul>
                    <?php endif; ?>
				</div>
				<p class="price-table-catalog__cost-mobile"><?php the_field('web-price_price'); ?></p>
			</div>
		</section>
	</div>

<?php
get_footer();
