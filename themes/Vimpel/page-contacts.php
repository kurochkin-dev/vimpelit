<?php
/*
Template Name: Контакты
*/
?>

<?php
get_header();
?>

	<div class="contacts">
		<div class="contacts__image-container">
			<div class="contacts__main-container">
				<a href="tel:<?php the_field('contacts_main_phone'); ?>" class="contacts__main-phone">
					<?php the_field('contacts_main_phone'); ?>
				</a>
				<div class="contacts__sub-container">
					<div class="contacts__container">
						<p class="contacts__phone-heading"><?php the_field('contacts_position_one'); ?></p>
						<a href="tel:<?php the_field('contacts_phone_one'); ?>" class="contacts__links">
							<?php the_field('contacts_phone_one'); ?>
						</a>
						<p class="contacts__phone-heading"><?php the_field('contacts_position_two'); ?></p>
						<a href="tel:<?php the_field('contacts_phone_two'); ?>" class="contacts__links">
							<?php the_field('contacts_phone_two'); ?>
						</a>
						<p class="contacts__phone-heading"><?php the_field('contacts_position_three'); ?></p>
						<a href="tel:<?php the_field('contacts_phone_three'); ?>" class="contacts__links">
                            <?php the_field('contacts_phone_three'); ?>
						</a>
						<a href="mailto:<?php the_field('contacts_mail'); ?>" class="contacts__links">
							<?php the_field('contacts_mail'); ?>
						</a>
						<p class="contacts__work-time">Время работы:</p>
						<p class="contacts__work-time"><?php the_field('contacts_hours_of_work'); ?></p>
					</div>
					<a href="https://yandex.ru/maps/2/saint-petersburg/house/prospekt_obukhovskoy_oborony_199/Z0kYcgFhS0IPQFtjfXR3dnVqZA"
					   target="_blank" rel="nofollow noreferrer" class="contacts__location">
						<p class="contacts__location-icon"></p>
						<?php the_field('contacts_address'); ?>
					</a>
				</div>
				<div class="contacts__social-icons-container">
					<a href="https://www.instagram.com/vimpel_it_web/" target="_blank" rel="nofollow noreferrer"
					   class="contacts__social-icon contacts__social-icon_inst"></a>
					<a href="https://vk.com/vimpel_it_web/" target="_blank" rel="nofollow noreferrer"
					   class="contacts__social-icon contacts__social-icon_vk"></a>
				</div>
			</div>
			<div class="contacts__bottom-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mouse.svg" alt="Иконка мышки"
					 class="contacts__mouse-icon"/>
				<p class="contacts__text">Прокрутите вниз</p>
			</div>
		</div>
		<div class="contacts__yandex-maps">
			<script>
                ymaps.ready(function () {
                    var myMap = new ymaps.Map('map', {
                            center: [59.867990, 30.461278],
                            zoom: 17
                        }, {
                            searchControlProvider: 'yandex#search'
                        }),
                        // MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                        //     '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                        // ),
                        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                            hintContent: 'Группа Компаний Vimpel',
                            balloonContent: 'пр. Обуховской Обороны, д.199'
                        }, {
                            iconLayout: 'default#image',
                            iconImageHref: 'http://178spbwp.loc/wp-content/themes/Vimpel/assets/images/svg/point-on-map.svg',
                            iconImageSize: [45, 55],
                            iconImageOffset: [-20, -48]
                        });
                    myMap.geoObjects
                        .add(myPlacemark);
                });
			</script>
			<div id="map" style='width:100%;height: 100%;'></div>
		</div>
	</div>

<?php
get_footer();

