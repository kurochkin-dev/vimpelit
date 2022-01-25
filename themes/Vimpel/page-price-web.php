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
			<h1 class="price-web__heading">Цены на услуги web студии</h1>
			<p class="price-web__subheading">Ознакомьтесь с перечнем наших услуг, а также их стоимостью</p>
			<button class="price-web__button" type="button">Получить консультацию</button>
			<div class="price-web__bottom-container">
				<a href="#price-table-shop" class="scrolldown">
					<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
						<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
						<path class="down"
							  d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z"
							  fill="white"/>
					</svg>
				</a>
				<p class="price-web__text">Прокрутите вниз</p>
			</div>
		</section>
		<h3 id="price-table-shop" class="price-web__tables-heading">СТОИМОСТЬ УСЛУГ</h3>
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
                            $title = get_sub_field('web-price_card_title_two');
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
		<h4 class="price-web__table-heading">Сайт-визитка</h4>
        <?php include 'inc/section-business-card.php' ?>
		<h4 class="price-web__table-heading">Landing Page</h4>
        <?php include 'inc/section-landing.php' ?>
		<h4 class="price-web__table-heading">Seo-услуги</h4>
        <?php include 'inc/section-seo.php' ?>
		<h4 class="price-web__table-heading">Многостраничный (корпоративный) сайт</h4>
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
		<h4 class="price-web__table-heading">Сайт-каталог</h4>
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
