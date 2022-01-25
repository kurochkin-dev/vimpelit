<section class="price-table table-margin">
	<div class="price-table__container price-table__container_web">
        <?php if (get_field('seo_cards', 34)): ?>
            <?php while (has_sub_field('seo_cards', 34)) : ?>
                <?php
				$class = get_sub_field('seo_card_class');
                $title = get_sub_field('seo_card_name');
                $price = get_sub_field('seo_card_price');
                ?>
				<div class="price-table__section price-table__section-seo">
					<div class="price-table__heading-container <?php echo $class; ?>">
						<h5 class="price-table__heading">
                            <?php echo $title; ?>
							<span class="price-table__heading-span"><?php echo $price; ?></span>
						</h5>
					</div>
					<ul class="price-table__list">
                        <?php if (get_sub_field('seo_card_list')): ?>
                            <?php while (has_sub_field('seo_card_list')) : ?>
                                <?php
                                $item = get_sub_field('seo_card_item');
                                ?>
								<li class="price-table__list-item"><?php echo $item; ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
					</ul>
					<p class="price-table__under-list-price"><?php echo $price; ?></p>
				</div>
            <?php endwhile; ?>
        <?php endif; ?>
	</div>
</section>
