<?php
/*
Template Name: Создание интернет-магазина под ключ
*/
?>

<?php
get_header();
?>

	<section class="shop__image-container">
		<h1 class="shop__heading">Создание интернет-мгазина под ключ</h1>
		<p class="shop__subheading">Проектирование и разработка интернет-магазина в Санкт-Петербурге</p>
		<button class="shop__button" type="button">Заказать сайт</button>
		<div class="shop__bottom-container">
			<a href="#web-shop" class="scrolldown">
				<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
					<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
					<path class="down" d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z" fill="white"/>
				</svg>
			</a>
			<p class="shop__text">Прокрутите вниз</p>
		</div>
	</section>
	<section id="web-shop" class="web-shop">
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

