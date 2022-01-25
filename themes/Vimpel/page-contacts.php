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
				<a href="#contactsMaps" class="scrolldown">
					<svg width="47" height="53" viewBox="0 0 47 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<ellipse class="roll" cx="31.5" cy="13.5" rx="2.5" ry="3.5" fill="white"/>
						<rect class="mouse" x="16.5" y="0.5" width="30" height="52" rx="15" stroke="white"/>
						<path class="down" d="M3.64645 41.3536C3.84171 41.5488 4.15829 41.5488 4.35355 41.3536L7.53553 38.1716C7.7308 37.9763 7.7308 37.6597 7.53553 37.4645C7.34027 37.2692 7.02369 37.2692 6.82843 37.4645L4 40.2929L1.17157 37.4645C0.976312 37.2692 0.659729 37.2692 0.464467 37.4645C0.269205 37.6597 0.269205 37.9763 0.464467 38.1716L3.64645 41.3536ZM3.5 17L3.5 41L4.5 41L4.5 17L3.5 17Z" fill="white"/>
					</svg>
				</a>
				<p class="contacts__text">Прокрутите вниз</p>
			</div>
		</div>
		<div id="contactsMaps" class="contacts__yandex-maps">
			<script>
                ymaps.ready(function () {
                    var myMap = new ymaps.Map('map', {
                            center: [59.867990, 30.461278],
                            zoom: 17
                        }, {
                            searchControlProvider: 'yandex#search'
                        }),

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

