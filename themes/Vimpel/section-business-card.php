<section class="price-table table-margin">
	<div class="price-table__container price-table__container_web">

        <?php if (get_field('business-card_cards', 28)): ?>
            <?php while (has_sub_field('business-card_cards', 28)) : ?>
                <?php
                $class = get_sub_field('business-card_class');
                $title = get_sub_field('business-card_name');
                $price = get_sub_field('business-card_price');
                ?>
				<div class="price-table__section price-table__section-business">
					<div class=" <?php echo $class; ?> price-table__heading-container price-table__heading-container-business">
						<h5 class="price-table__heading">
                            <?php echo $title; ?>
							<span class="price-table__heading-span"><?php echo $price; ?></span>
						</h5>
					</div>
					<ul class="price-table__list">
                        <?php if (get_sub_field('business-card_list')): ?>
                            <?php while (has_sub_field('business-card_list')) : ?>
                                <?php
                                $item = get_sub_field('business-card_item');
                                ?>
								<li class="price-table__list-item"><?php echo $item; ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
					</ul>
					<p class="price-table__under-list-price"><?php echo $price; ?></p>
				</div>
            <?php endwhile; ?>
        <?php endif; ?>

		<!--        <div class="price-table__section">-->
		<!--            <div class="price-table__heading-container price-table__heading-container-business">-->
		<!--                <h5 class="price-table__heading">-->
		<!--                    САЙТ ДЛЯ МАЛОГО БИЗНЕСА (21&nbsp;ДЕНЬ)-->
		<!--                    <span class="price-table__heading-span"> 50 000 руб.</span>-->
		<!--                </h5>-->
		<!--            </div>-->
		<!--            <ul class="price-table__list">-->
		<!--                <li class="price-table__list-item">Уникальный дизайн "Главной страницы" и упрощенный для-->
		<!--                    внутренних страниц (до 6 страниц)-->
		<!--                </li>-->
		<!--                <li class="price-table__list-item">Слайдер с УТП (спец предложение)</li>-->
		<!--                <li class="price-table__list-item">Форма обратной связи</li>-->
		<!--                <li class="price-table__list-item">Кроссбраузерная верстка (кроме Safari и IE ниже 11 версии)-->
		<!--                </li>-->
		<!--                <li class="price-table__list-item">Адаптивная (резиновая) верстка под планшеты и мобильные-->
		<!--                    устройства-->
		<!--                </li>-->
		<!--                <li class="price-table__list-item">Медиагалерея (фото и видео)</li>-->
		<!--                <li class="price-table__list-item">Карта проезда</li>-->
		<!--                <li class="price-table__list-item">Наполнение сайта контентом</li>-->
		<!--                <li class="price-table__list-item">Почтовый ящик с доменным именем</li>-->
		<!--                <li class="price-table__list-item">Оплата в 2 этапа (предоплата 50%)</li>-->
		<!--            </ul>-->
		<!--            <p class="price-table__under-list-price">50 000 руб.</p>-->
		<!--        </div>-->
		<!--        <div class="price-table__section">-->
		<!--            <div class="price-table__heading-container price-table__heading-container-second">-->
		<!--                <h5 class="price-table__heading">-->
		<!--                    САЙТ ДЛЯ МАЛОГО БИЗНЕСА (28&nbsp;ДНЕЙ)-->
		<!--                    <span class="price-table__heading-span"> 65 000 руб.</span>-->
		<!--                </h5>-->
		<!--            </div>-->
		<!--            <ul class="price-table__list">-->
		<!--                <li class="price-table__list-item">Уникальный дизайн всех страниц (до 6 страниц)</li>-->
		<!--                <li class="price-table__list-item">Слайдер с УТП (спец предложение)</li>-->
		<!--                <li class="price-table__list-item">Уникальная форма обратной связи</li>-->
		<!--                <li class="price-table__list-item">Кроссбраузерная верстка (кроме Safari и IE ниже 11 версии)-->
		<!--                </li>-->
		<!--                <li class="price-table__list-item">Адаптивная (резиновая) верстка под планшеты и мобильные-->
		<!--                    устройства-->
		<!--                </li>-->
		<!--                <li class="price-table__list-item">Карта проезда</li>-->
		<!--                <li class="price-table__list-item">Наполнение сайта контентом</li>-->
		<!--                <li class="price-table__list-item">Почтовый ящик с доменным именем</li>-->
		<!--                <li class="price-table__list-item">Разработка рекламного баннера</li>-->
		<!--                <li class="price-table__list-item">Интеграция с соцсетями</li>-->
		<!--                <li class="price-table__list-item">Он-лайн консультант (JivoSite)</li>-->
		<!--                <li class="price-table__list-item">Оплата в 2 этапа (предоплата 50%)</li>-->
		<!--            </ul>-->
		<!--            <p class="price-table__under-list-price">65 000 руб.</p>-->
		<!--        </div>-->
		<!--        <div class="price-table__section">-->
		<!--            <div class="price-table__heading-container price-table__heading-container-last">-->
		<!--                <h5 class="price-table__heading">-->
		<!--                    САЙТ ДЛЯ МАЛОГО БИЗНЕСА (35&nbsp;ДНЕЙ)-->
		<!--                    <span-->
		<!--                        class="price-table__heading-span"> 80 000 руб.</span>-->
		<!--                </h5>-->
		<!--            </div>-->
		<!--            <ul class="price-table__list">-->
		<!--                <li class="price-table__list-item">Уникальный дизайн всех страниц (до 6 страниц) по 2-3 эскиза-->
		<!--                </li>-->
		<!--                <li class="price-table__list-item">Составление семантического ядра по одному направлению</li>-->
		<!--                <li class="price-table__list-item">Слайдер с УТП (спец предложение)</li>-->
		<!--                <li class="price-table__list-item">Уникальная форма обратной связи</li>-->
		<!--                <li class="price-table__list-item">Кроссбраузерная верстка (кроме Safari и IE ниже 11 версии)-->
		<!--                </li>-->
		<!--                <li class="price-table__list-item">Адаптивная (резиновая) верстка под планшеты и мобильные устройства-->
		<!--                </li>-->
		<!--                <li class="price-table__list-item">Медиагалерея (фото и видео)</li>-->
		<!--                <li class="price-table__list-item">Карта проезда</li>-->
		<!--                <li class="price-table__list-item">Наполнение сайта контентом</li>-->
		<!--                <li class="price-table__list-item">Почтовый ящик с доменным именем</li>-->
		<!--                <li class="price-table__list-item">Разработка рекламного баннера</li>-->
		<!--                <li class="price-table__list-item">Интеграция с соцсетями</li>-->
		<!--                <li class="price-table__list-item">Он-лайн консультант (JivoSite)</li>-->
		<!--                <li class="price-table__list-item">Дополнительная форма “Обратный звонок”</li>-->
		<!--                <li class="price-table__list-item">Оплата в 2 этапа (предоплата 50%)</li>-->
		<!--            </ul>-->
		<!--            <p class="price-table__under-list-price">80 000 руб.</p>-->
		<!--        </div>-->
	</div>
</section>