<footer class="footer">
	<div class="footer__contacts-container">
		<div class="footer__links-container">
			<a href="tel:<?php the_field('footer_phone', 'option'); ?>" class="footer__phone-link">
				<p class="footer__phone-icon"></p>
				<?php the_field('footer_phone', 'option'); ?>

			</a>
			<a href="mailto:<?php the_field('footer_mail', 'option'); ?>" class="footer__email-link">
				<p class="footer__email-icon"></p>
				<?php the_field('footer_mail', 'option'); ?>
			</a>
			<a href="https://yandex.ru/maps/2/saint-petersburg/house/prospekt_obukhovskoy_oborony_199/Z0kYcgFhS0IPQFtjfXR3dnVqZA"
			   target="_blank" rel="nofollow noreferrer" class="footer__map-link">
				<p class="footer__map-icon"></p>
				<?php the_field('footer_address', 'option'); ?>
			</a>
		</div>
		<div class="footer__icons-container">
			<a href="<?php the_field('footer_link_inst', 'option'); ?>" target="_blank" rel="nofollow noreferrer"
			   class="footer__icon footer__icon_inst"></a>
			<a href="<?php the_field('footer_link_vk', 'option'); ?>" target="_blank" rel="nofollow noreferrer"
			   class="footer__icon footer__icon_vk"></a>
		</div>
	</div>
	<section class="footer__form-container">
		<div class="footer__form">
            <?php echo do_shortcode('[contact-form-7 id="55" title="Форма обратной связи в подвале сайта"]') ?>

<!--			<h2 class="footer__form-heading">Оставьте заявку и получите консультацию специалиста</h2>-->
<!--			<div class="footer__inputs-container">-->
<!--				<div class="footer__input-container">-->
<!--					<input type="text" class="footer__input" id="footer-name-input" name="name" value="" min="2"-->
<!--						   max="50" placeholder="Имя" pattern="[A-Za-zа-яёА-ЯЁ -]{1,}" required/>-->
<!--					<span id="footer-name-input-error" class="footer-form__input_error"></span>-->
<!--				</div>-->
<!--				<div class="footer__input-container">-->
<!--					<input type="text" class="footer__input" id="footer-number-input" name="number" value="" min="3"-->
<!--						   max="20" placeholder="Телефон" pattern='^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$'-->
<!--						   required/>-->
<!--					<span id="footer-number-input-error" class="footer-form__input_error"></span>-->
<!--				</div>-->
<!--			</div>-->
<!--			<h3 class="footer__question">Как удобнее связаться с Вами?</h3>-->
<!--			<div class="footer__radio-container">-->
<!--				<div class="footer__radio">-->
<!--					<input id="phoneInput" type="radio" name="variant" value="Телефон" checked/>-->
<!--					<label for="phoneInput">Телефон</label>-->
<!--				</div>-->
<!--				<div class="footer__radio">-->
<!--					<input id="telegramInput" type="radio" name="variant" value="Telegram"/>-->
<!--					<label for="telegramInput">Telegram</label>-->
<!--				</div>-->
<!--				<div class="footer__radio">-->
<!--					<input id="whatsAppInput" type="radio" name="variant" value="WhatsApp"/>-->
<!--					<label for="whatsAppInput">WhatsApp</label>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="footer__submit-container">-->
<!--				<button type="submit" class="footer__submit-button">Получить консультацию</button>-->
<!--				<div class="footer__under-submit-button-container">-->
<!--					<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/svg/check.svg"-->
<!--						 alt="Иконка галочки" class="footer__under-submit-button-check"/>-->
<!--					<p class="footer__under-submit-button-text">Принимаю пользовательское соглашение</p>-->
<!--				</div>-->
<!--			</div>-->
		</div>
	</section>
</footer>

<?php wp_footer(); ?>
</div>
</body>
</html>


