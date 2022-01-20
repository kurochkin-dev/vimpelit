<?php
/*
Template Name: Создание многостраничного (корпоративного) сайта "под ключ"
*/
?>

<?php
get_header();
?>


<div class="multipage">
    <section class="multipage__image-container">
        <h2 class="multipage__heading">создание многостраничного (корпоративного) сайта "под ключ"</h2>
        <p class="multipage__subheading">Проектирование и разработка многостраничного сайта в Санкт-Петербурге</p>
        <button class="multipage__button" type="button">Заказать сайт</button>
        <div class="multipage__bottom-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки" class="multipage__mouse-icon" />
            <p class="multipage__text">Прокрутите вниз</p>
        </div>
    </section>
    <section class="multipage-info">
        <div class="multipage-info__container">
            <h3 class="multipage-info__heading"><?php the_field('multipage_title'); ?></h3>
            <p class="multipage-info__description">
				<?php the_field('multipage_desc_one'); ?>
            </p>
            <p class="multipage-info__description"><?php the_field('multipage_subtitle'); ?></p>

            <?php if (have_rows('multipage_list')): ?>
				<ul class="multipage-info__list-container">
                    <?php while (have_rows('multipage_list')): the_row();
                        $item = get_sub_field('multipage_item');
                        ?>
						<li class="multipage-info__list"><?php echo $item; ?></li>
                    <?php endwhile; ?>
				</ul>
            <?php endif; ?>
<!--            <ul class="multipage-info__list-container">-->
<!--                <li class="multipage-info__list">никаких ограничений по функционалу и дальнейшему масштабированию в связи с ростом вашего бизнеса;</li>-->
<!--                <li class="multipage-info__list">полностью уникальный, а не выстроенный на готовых шаблонах внешний вид;</li>-->
<!--                <li class="multipage-info__list">моментальная загрузка на всех устройствах;</li>-->
<!--                <li class="multipage-info__list">полная адаптивность под любые разрешения экрана телефонов и планшетов;</li>-->
<!--                <li class="multipage-info__list">уникальный контент, созданный профессиональными копирайтерами.</li>-->
<!--            </ul>-->

            <p class="multipage-info__description">
				<?php the_field('multipage_desc_two'); ?>
                Стоимость разработки вашего корпоративного сайта согласуется до старта
                работы и не может быть увеличена в одностороннем порядке. Итоговая цена
                зависит от размеров сайта и технических решений, задействованных при разработке.
            </p>
        </div>
    </section>
	<?php include 'section-page-form.php'?>
	<div class="table">
		<div class="animation">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/animation-main.jpg" alt="Статичное изображение" class="animation__img animation__img_main"/>
			<div class="animation__text-container">
				<p class="animation__text">Система управления сайтом</p>
			</div>
		</div>
		<div class="table__container">
			<?php the_field('multipage_tables'); ?>
<!--			<table class="design">-->
<!--				<thead class="design__head">-->
<!--				<tr class="design__head-container">-->
<!--					<th class="design__head-item design__head-item_main">Дизайн</th>-->
<!--					<th class="design__head-item">до 15 страниц</th>-->
<!--					<th class="design__head-item">до 25 страниц</th>-->
<!--					<th class="design__head-item">до 25 страниц "под ключ"</th>-->
<!--				</tr>-->
<!--				</thead>-->
<!--				<tbody class="design__body">-->
<!--				<tr class="design__body-container">-->
<!--					<td data-table="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/animation-design.jpg" class="design__body-text">-->
<!--					Уникальный дизайн для всех страниц-->
<!--					</td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-text design__body-text_center">по 2-3 эскиза</td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td data-table="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/animation-form.jpg" class="design__body-text">-->
<!--					Форма обратной связи-->
<!--					</td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-text design__body-text_center">до 4 различных форм</td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td data-table="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/animation-slider.jpg" class="design__body-text">-->
<!--					Слайдер с УТП (спец предложение)-->
<!--					</td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td data-table="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/animation-map.jpg" class="design__body-text">-->
<!--					Карта проезда-->
<!--					</td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td data-table="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/animation-adaptive.jpg" class="design__body-text">-->
<!--					Адаптивная (резиновая) верстка под планшеты и телефоны-->
<!--					</td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td data-table="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/animation-media.jpg" class="design__body-text">-->
<!--					Медиагалерея (фото и видео)-->
<!--					</td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td data-table="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/animation-advertis.jpg" class="design__body-text">-->
<!--					Разработка рекламного баннера-->
<!--					</td>-->
<!--					<td class="design__body-text"></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				</tbody>-->
<!--			</table>-->
<!--			<table class="design">-->
<!--				<thead class="design__head">-->
<!--				<tr class="design__head-container">-->
<!--					<th class="design__head-item design__head-item_dev">Разработка</th>-->
<!--					<th class="design__head-item">до 15 страниц</th>-->
<!--					<th class="design__head-item">до 25 страниц</th>-->
<!--					<th class="design__head-item">до 25 страниц "под ключ"</th>-->
<!--				</tr>-->
<!--				</thead>-->
<!--				<tbody class="design__body">-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Система управления сайтом-->
<!--					</td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Почтовый ящик с доменным именем-->
<!--					</td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Составление семантического ядра-->
<!--					</td>-->
<!--					<td class="design__body-text design__body-text_center">по 1 направлению</td>-->
<!--					<td class="design__body-text design__body-text_center">по 2 направлениям</td>-->
<!--					<td class="design__body-text design__body-text_center">по 3 направлениям</td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Кроссбраузерная верстка (кроме Safari и IE ниже 11 версии)-->
<!--					</td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Интеграция с соцсетями-->
<!--					</td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Онлайн консультант (JivoSite)-->
<!--					</td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Уникальные программируемые динамические блоки-->
<!--					</td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Реализация кода страниц любой сложности-->
<!--					</td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Подключение CRM системы-->
<!--					</td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Установка и настройка Я.Метрики и G.Analitics-->
<!--					</td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text">-->
<!--					Наполнение сайта контентом-->
<!--					</td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"></td>-->
<!--					<td class="design__body-img"><img src="http://vimpelitwp/wp-content/themes/Vimpel/assets/images/svg/vector.svg" alt="Иконка галочки" /></td>-->
<!--				</tr>-->
<!--				</tbody>-->
<!--			</table>-->
<!--			<table class="design">-->
<!--				<thead class="design__head">-->
<!--				<tr class="design__head-container">-->
<!--					<th class="design__head-item design__head-item_time">Время выполнения</th>-->
<!--					<th class="design__head-item">45 дней</th>-->
<!--					<th class="design__head-item">60 дней</th>-->
<!--					<th class="design__head-item">75 дней</th>-->
<!--				</tr>-->
<!--				</thead>-->
<!--				<tbody class="design__body">-->
<!--				<tr class="design__body-container">-->
<!--					<td class="design__body-text design__body-text_pay">Оплата в 2 этапа (предоплата 50%)</td>-->
<!--					<td class="design__body-text design__body-text_center design__body-text_value">99 000 руб.</td>-->
<!--					<td class="design__body-text design__body-text_center design__body-text_value">150 000 руб.</td>-->
<!--					<td class="design__body-text design__body-text_center design__body-text_value">200 000 руб.</td>-->
<!--				</tr>-->
<!--				</tbody>-->
<!--			</table>-->
		</div>
	</div>
</div>


<?php
get_footer();
