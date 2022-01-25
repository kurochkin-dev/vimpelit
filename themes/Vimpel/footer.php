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
		</div>
	</section>
</footer>

<?php wp_footer(); ?>
</div>
</body>
</html>


