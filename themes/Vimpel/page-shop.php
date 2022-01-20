<?php
/*
Template Name: Создание интернет-магазина под ключ
*/
?>

<?php
get_header();
?>

	<section class="shop__image-container">
		<h2 class="shop__heading">СОЗДАНИЕ ИНТЕРНЕТ-МАГАЗИНА ПОД КЛЮЧ</h2>
		<p class="shop__subheading">Проектирование и разработка интернет-магазина в Санкт-Петербурге</p>
		<button class="shop__button" type="button">Заказать сайт</button>
		<div class="shop__bottom-container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
				 class="shop__mouse-icon"/>
			<p class="shop__text">Прокрутите вниз</p>
		</div>
	</section>
	<section class="web-shop">
		<div class="web-shop__info-container">
			<h3 class="web-shop__info-heading"><?php the_field('shop_page_title'); ?></h3>
            <?php if (have_rows('shop_page_descrs_one')): ?>
                <?php while (have_rows('shop_page_descrs_one')): the_row();
                    $desc = get_sub_field('shop_page_desc_one');
                    ?>
					<p class="web-shop__info-description"><?php echo $desc; ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
		</div>
		<div class="web-shop__price-container">
			<h4 class="web-shop__price-heading"><?php the_field('shop_page_subtitle'); ?></h4>

            <?php if (have_rows('shop_page_descrs_two')): ?>
                <?php while (have_rows('shop_page_descrs_two')): the_row();
                    $desc = get_sub_field('shop_page_desc_two');
                    ?>
					<p class="web-shop__price-description"><?php echo $desc; ?></p>
                <?php endwhile; ?>
            <?php endif; ?>

		</div>
	</section>
	<section class="price">
		<div class="price__main-container">
			<div class="price__cards-container">
                <?php if (get_field('shop_page_cards_one')): ?>
                    <?php while (has_sub_field('shop_page_cards_one')) : ?>
                        <?php
                        $title = get_sub_field('shop_page_card_title_one');
                        $price = get_sub_field('shop_page_card_price_one');
                        ?>
						<div class="card">
							<h5 class="card__heading"><?php echo $title; ?></h5>
							<ul class="card__list">
                                <?php if (get_sub_field('shop_page_card_list_one')): ?>
                                    <?php while (has_sub_field('shop_page_card_list_one')) : ?>
                                        <?php
                                        $item = get_sub_field('shop_card_list_item_one');
                                        ?>
										<li class="card__item"><?php echo $item; ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
							</ul>
							<p class="card__value"><?php echo $price; ?></p>
						</div>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
			<div class="price__cards-container">
                <?php if (get_field('shop_page_cards_two')): ?>
                    <?php while (has_sub_field('shop_page_cards_two')) : ?>
                        <?php
                        $title = get_sub_field('shop_page_card_title_two');
                        $price = get_sub_field('shop_page_card_price_two');
                        ?>
						<div class="card">
							<h5 class="card__heading"><?php echo $title; ?></h5>
							<ul class="card__list">
                                <?php if (get_sub_field('shop_page_card_list_two')): ?>
                                    <?php while (has_sub_field('shop_page_card_list_two')) : ?>
                                        <?php
                                        $item = get_sub_field('shop_card_list_item_two');
                                        ?>
										<li class="card__item"><?php echo $item; ?></li>
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

<?php
get_footer();

