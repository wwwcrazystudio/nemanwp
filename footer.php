<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Neman
 */

?>

<?php if (!is_front_page() && !is_page_template('tpl-team.php')) : ?>
	<footer class="footer">
		<div class="footer__wrap">
			<div class="footer__left-col">
				<div class="footer__left-col-wrap">
					<a href="<?= function_exists('pll_home_url') ? pll_home_url() : home_url(); ?>" class="footer__logo">
						<svg xmlns="http://www.w3.org/2000/svg" width="244" height="29" viewBox="0 0 244 29" fill="none">
							<path d="M74.7 7.9C76.4 7.9 77.8 8.5 78.8 9.5 79.8 10.5 80.4 11.9 80.4 13.6V22.1H78.4V13.6C78.4 12.4 78.1 11.4 77.4 10.7 76.7 10 75.7 9.7 74.5 9.7 73.1 9.7 71.9 10.2 71.1 11 70.2 11.8 69.7 13.1 69.7 14.9V22.1H67.8V8.3H69.7V10.4C70.9 8.8 72.5 7.9 74.7 7.9Z" fill="#fff" />
							<path d="M90.8 7.9C93 7.9 94.8 8.6 96.1 10.1 97.4 11.5 98.1 13.2 98.1 15.2 98.1 15.4 98.1 15.7 98 16.1H85.2C85.4 17.5 86 18.6 87.1 19.4 88.1 20.2 89.5 20.7 91 20.7 92.1 20.7 93 20.5 93.8 20.1 94.6 19.6 95.2 19 95.6 18.4L97.3 19.3C96.6 20.3 95.8 21.1 94.6 21.6 93.5 22.2 92.2 22.5 90.8 22.5 88.5 22.5 86.7 21.8 85.3 20.5 83.8 19.1 83.1 17.4 83.1 15.3 83.1 13.2 83.8 11.5 85.2 10.1 86.8 8.6 88.6 7.9 90.8 7.9ZM90.8 9.8C89.3 9.8 88.1 10.2 87.1 11 86.1 11.9 85.4 13 85.3 14.4H96.2C96 12.9 95.4 11.8 94.4 11 93.4 10.2 92.2 9.8 90.8 9.8Z" fill="#fff" />
							<path d="M116.7 7.9C118.3 7.9 119.6 8.5 120.6 9.5 121.6 10.5 122.2 11.8 122.2 13.5V22.1H120.2V13.5C120.2 12.3 119.9 11.4 119.2 10.7 118.6 10.1 117.7 9.7 116.7 9.7 115.5 9.7 114.5 10.1 113.7 10.8 113 11.6 112.6 12.8 112.6 14.4V22.1H110.7V13.5C110.7 12.3 110.4 11.4 109.8 10.7 109.2 10.1 108.3 9.8 107.2 9.8 106 9.8 105.1 10.2 104.2 10.9 103.5 11.7 103.1 12.9 103.1 14.5V22.2H101.1V8.3H103.1V10.3C104.1 8.8 105.6 8 107.5 8 109.6 8 111.1 8.8 111.9 10.5 113 8.8 114.6 7.9 116.7 7.9Z" fill="#fff" />
							<path d="M138.4 8.3H140.3V22.2H138.4V19.5C137.1 21.5 135.1 22.5 132.5 22.5 130.5 22.5 128.7 21.8 127.2 20.4 125.7 19 125 17.3 125 15.3 125 13.2 125.7 11.5 127.2 10.1 128.7 8.7 130.5 8 132.5 8 135.1 8 137.1 9 138.4 11V8.3ZM128.5 19.1C129.7 20.2 131 20.7 132.6 20.7 134.2 20.7 135.6 20.2 136.6 19.1 137.8 18 138.3 16.8 138.3 15.2 138.3 13.6 137.8 12.4 136.6 11.3 135.5 10.2 134.2 9.7 132.6 9.7 131 9.7 129.6 10.2 128.5 11.3 127.4 12.4 126.9 13.6 126.9 15.2 126.9 16.8 127.5 18 128.5 19.1Z" fill="#fff" />
							<path d="M151.2 7.9C153 7.9 154.4 8.5 155.4 9.5 156.4 10.5 156.9 11.9 156.9 13.6V22.1H155V13.6C155 12.4 154.7 11.4 154 10.7 153.3 10 152.3 9.7 151 9.7 149.6 9.7 148.5 10.2 147.6 11 146.8 11.8 146.3 13.1 146.3 14.9V22.1H144.4V8.3H146.3V10.4C147.4 8.8 149 7.9 151.2 7.9Z" fill="#fff" />
							<path d="M180.5 8.3H182.4V21.6C182.4 23.6 181.7 25.2 180.3 26.4 178.8 27.5 177.1 28.1 175.1 28.1 171.7 28.1 169.4 26.9 168.2 24.7L169.9 23.8C170.7 25.5 172.5 26.3 175.1 26.3 176.8 26.3 178.1 25.9 179.1 25 180 24.2 180.6 23.1 180.6 21.6V19.5C179.2 21.5 177.2 22.5 174.7 22.5 172.6 22.5 170.8 21.8 169.3 20.4 167.9 19 167.2 17.3 167.2 15.3 167.2 13.2 167.9 11.5 169.3 10.1 170.8 8.7 172.6 8 174.7 8 177.2 8 179.2 9 180.6 11V8.3H180.5ZM170.7 19.1C171.8 20.2 173.1 20.7 174.7 20.7 176.3 20.7 177.7 20.2 178.8 19.1 179.9 18 180.4 16.8 180.4 15.2 180.4 13.6 179.9 12.4 178.8 11.3 177.6 10.2 176.3 9.7 174.7 9.7 173.1 9.7 171.7 10.2 170.7 11.3 169.5 12.4 169 13.6 169 15.2 169 16.8 169.5 18 170.7 19.1Z" fill="#fff" />
							<path d="M188.4 10.6C189.3 8.9 190.8 8.1 193 8.1V9.8C191.6 9.8 190.6 10.2 189.7 11 188.8 11.7 188.3 12.9 188.3 14.4V22.1H186.5V8.3H188.4V10.6Z" fill="#fff" />
							<path d="M207 20.4C205.5 21.8 203.7 22.5 201.5 22.5 199.4 22.5 197.5 21.8 196.1 20.4 194.6 19 193.8 17.3 193.8 15.2 193.8 13.1 194.6 11.4 196.1 10 197.5 8.6 199.4 7.9 201.5 7.9 203.7 7.9 205.5 8.6 207 10 208.4 11.4 209.2 13.1 209.2 15.2 209.2 17.3 208.5 19 207 20.4ZM197.5 19.1C198.6 20.2 199.9 20.7 201.5 20.7 203.1 20.7 204.5 20.2 205.6 19.1 206.7 18 207.2 16.8 207.2 15.2 207.2 13.6 206.7 12.4 205.6 11.3 204.5 10.2 203.1 9.7 201.5 9.7 199.9 9.7 198.5 10.2 197.5 11.3 196.4 12.4 195.8 13.6 195.8 15.2 195.8 16.8 196.4 18 197.5 19.1Z" fill="#fff" />
							<path d="M222.7 8.3H224.6V22.2H222.7V20.1C221.6 21.7 220 22.6 217.8 22.6 216 22.6 214.6 22.1 213.6 21.1 212.6 20.1 212.1 18.7 212.1 16.9V8.3H214V16.8C214 18.1 214.3 19 215.1 19.7 215.7 20.4 216.7 20.7 218 20.7 219.4 20.7 220.5 20.3 221.4 19.5 222.2 18.7 222.7 17.3 222.7 15.6V8.3Z" fill="#fff" />
							<path d="M236.5 7.9C238.6 7.9 240.4 8.6 241.8 10 243.3 11.4 244 13.1 244 15.2 244 17.2 243.3 18.9 241.8 20.4 240.4 21.8 238.6 22.5 236.5 22.5 233.9 22.5 231.9 21.4 230.6 19.4V27.7H228.7V8.3H230.6V11C231.9 9 233.9 7.9 236.5 7.9ZM232.3 19.1C233.4 20.2 234.7 20.7 236.3 20.7 237.9 20.7 239.3 20.2 240.4 19.1 241.5 18 242 16.8 242 15.2 242 13.6 241.5 12.4 240.4 11.3 239.2 10.2 237.9 9.7 236.3 9.7 234.7 9.7 233.3 10.2 232.3 11.3 231.1 12.4 230.6 13.6 230.6 15.2 230.6 16.8 231.1 18 232.3 19.1Z" fill="#fff" />
							<path d="M45.6 7.8H15.3V9.4C15.3 11.5 17.1 13.2 19.3 13.2H44.5L45.6 7.8Z" fill="#fff" />
							<path d="M22.8 15.3V16.8C22.8 18.9 24.6 20.6 26.7 20.6H42.8L44 15.3H22.8V15.3Z" fill="#fff" />
							<path d="M30.2 24.2C30.2 26.3 32 28 34.2 28H41.1L42.3 22.7H30.2V24.2Z" fill="#fff" />
							<path d="M54.1 1.3C53.4 0.4 52.4 0 51.4 0H0V1.5C0 3.5 1.7 5.2 3.8 5.2H49L43.9 27.9H49.4L54.8 4.1C55 3.1 54.7 2 54.1 1.3Z" fill="#fff" />
						</svg>
					</a>
					<div itemscope itemtype="http://schema.org/Organization" class="footer__address">
						<span itemprop="name" class="sr-only">Neman Group</span>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<span itemprop="postalCode">117638,</span>
							<span itemprop="addressLocality"><?php _e('Moscow, Russia', 'neman'); ?></span>
							<span itemprop="streetAddress" class="footer__address-street"><?php _e('Odesskya str., building 2, BC Lotos, Tower C', 'neman'); ?></span>
						</div>
					</div>
					<a href="<?php the_permalink(function_exists('pll_get_post') ? pll_get_post(23) : 23); ?>" class="footer__contacts-link"><?php _e('Contact us', 'neman'); ?></a>
					<div class="footer__copyright footer__copyright--lg">© <?= date('Y'); ?> Neman Group</div>
				</div>
			</div>
			<div class="footer__right-col">
				<nav class="footer__footer-menu footer-menu">
					<?php footer_bem_menu('footer-menu', 'footer-menu'); ?>
				</nav>
				<ul class="footer__links">
					<li class="footer__link-item"><a href="<?= get_privacy_policy_url(); ?>" class="footer__link"><?php _e('Privacy policy', 'neman'); ?></a></li>
					<!-- <li class="footer__link-item"><a href="<?php the_permalink(52); ?>" class="footer__link"><?php _e('Terms of use', 'neman'); ?></a></li> -->
				</ul>
				<div class="footer__copyright footer__copyright--xs">© <?= date('Y'); ?> Neman Group</div>
			</div>
		</div>
	</footer>
<?php endif; ?>

<?php if (!isset($_COOKIE['cookies'])) : ?>
<div class="cookies">
	<div class="cookies__wrap">
		<div class="cookies__text">
			<?php _e('We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.', 'neman'); ?>
			<a href="<?= get_permalink(function_exists('pll_get_post') ? pll_get_post(106) : 106); ?>"><?php _e('Learn more', 'neman'); ?></a>
		</div>
		<button class="cookies__btn">
			<?php _e('Accept', 'neman'); ?>
		</button>
	</div>
</div>
<?php endif;?>

<div class="modal" id="callback-modal">
	<div class="modal__body modal__body--callback">
		<button class="modal__close">
			<svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
				<line x1="1.35355" y1="0.646935" x2="31.3529" y2="30.6463" stroke="#979797" />
				<line x1="0.646447" y1="30.6457" x2="30.6458" y2="0.646359" stroke="#979797" />
			</svg>
		</button>
		<div class="modal__content">
			<div class="modal__head">
				<div class="modal__title"><?php _e('Contact us', 'neman'); ?></div>
			</div>
			<form class="modal__form form">
				<div class="form__group">
					<input name="name" id="name" class="form__control" placeholder="<?php _e('Your name', 'neman'); ?>" required>
					<label for="name" class="form__label"><?php _e('Your name', 'neman'); ?></label>
				</div>
				<div class="form__group">
					<input type="email" name="email" id="email" class="form__control" placeholder="<?php _e('E-mail', 'neman'); ?>">
					<label for="email" class="form__label"><?php _e('E-mail', 'neman'); ?></label>
				</div>
				<div class="form__group">
					<input type="tel" name="tel" id="tel" class="form__control" placeholder="<?php _e('Phone +7', 'neman'); ?>" required>
					<label for="tel" class="form__label"><?php _e('Phone +7', 'neman'); ?></label>
				</div>
				<div class="form__group">
					<textarea name="message" id="message" class="form__control form__control--textarea" rows="2" placeholder="<?php _e('Comments', 'neman'); ?>"></textarea>
					<label for="mesagge" class="form__label"><?php _e('Comments', 'neman'); ?></label>
				</div>
				<div class="form__group form__group--checkbox">
					<input type="checkbox" name="policy" id="policy" class="form__control" required>
					<label for="policy" class="form__label"><?php _e('I have read and accept the Privacy policy'); ?></label>
				</div>
				<div class="form__foot">
					<button class="form__btn"><?php _e('Submit', 'neman'); ?></button>
				</div>
				<input type="hidden" name="action" value="contact_form">
			</form>
			<div class="cv-form__notice">
				<?php _e('Thank you. Your message has been sent', 'neman'); ?>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>

</html>