<?php
/**
 * Footer template
 *
 * @package Prestige_Shoes
 */
?>

<!-- Newsletter -->
<?php if ( ! is_page_template( 'page-thanks.php' ) ) : ?>
<section class="newsletter">
	<div class="container">
		<div class="newsletter-inner">
			<div>
				<span class="eyebrow eyebrow--light">Stay Connected</span>
				<h2>The <em>Insider</em> Letter</h2>
				<p>Get first access to new arrivals, private trunk shows, and the occasional thoughtful note on style. No spam. Ever.</p>
			</div>
			<div>
				<form class="newsletter-form" data-newsletter>
					<input type="email" name="email" placeholder="Your email address" required aria-label="Email address">
					<button type="submit">Subscribe</button>
				</form>
				<small>By subscribing you agree to our <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" style="color: var(--gold);">Privacy Policy</a>.</small>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<!-- Footer -->
<footer class="site-footer" role="contentinfo">
	<div class="container">

		<div class="footer-grid">

			<div class="footer-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
					Prestige
					<small>Shoes</small>
				</a>
				<p>Imported formal footwear of uncompromising craftsmanship, delivered to Nigeria's most discerning professionals since 2025.</p>

				<?php $socials = prestige_get_social_links(); ?>
				<div class="social-row">
					<?php if ( ! empty( $socials['instagram'] ) ) : ?>
						<a href="<?php echo esc_url( $socials['instagram'] ); ?>" class="social-icon" target="_blank" rel="noopener" aria-label="Instagram">
							<?php echo prestige_icon( 'ig' ); ?>
						</a>
					<?php endif; ?>
					<?php if ( ! empty( $socials['facebook'] ) ) : ?>
						<a href="<?php echo esc_url( $socials['facebook'] ); ?>" class="social-icon" target="_blank" rel="noopener" aria-label="Facebook">
							<?php echo prestige_icon( 'fb' ); ?>
						</a>
					<?php endif; ?>
					<?php if ( ! empty( $socials['whatsapp'] ) ) : ?>
						<a href="<?php echo esc_url( $socials['whatsapp'] ); ?>" class="social-icon" target="_blank" rel="noopener" aria-label="WhatsApp">
							<?php echo prestige_icon( 'wa' ); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>

			<div class="footer-col">
				<h4>Shop</h4>
				<?php if ( has_nav_menu( 'footer-shop' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer-shop',
						'container'      => false,
					) );
				} else { ?>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/shop' ) ); ?>">All Footwear</a></li>
						<li><a href="<?php echo esc_url( home_url( '/shop?orderby=date' ) ); ?>">New Arrivals</a></li>
						<li><a href="<?php echo esc_url( home_url( '/shop/oxfords' ) ); ?>">Oxfords</a></li>
						<li><a href="<?php echo esc_url( home_url( '/shop/loafers' ) ); ?>">Loafers</a></li>
						<li><a href="<?php echo esc_url( home_url( '/shop/boots' ) ); ?>">Boots</a></li>
						<li><a href="<?php echo esc_url( home_url( '/size-guide' ) ); ?>">Size Guide</a></li>
					</ul>
				<?php } ?>
			</div>

			<div class="footer-col">
				<h4>Customer Care</h4>
				<?php if ( has_nav_menu( 'footer-care' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer-care',
						'container'      => false,
					) );
				} else { ?>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a></li>
						<li><a href="<?php echo function_exists( 'wc_get_account_endpoint_url' ) ? esc_url( wc_get_account_endpoint_url( 'orders' ) ) : '#'; ?>">Track Order</a></li>
						<li><a href="<?php echo esc_url( home_url( '/shipping-policy' ) ); ?>">Shipping</a></li>
						<li><a href="<?php echo esc_url( home_url( '/refund-policy' ) ); ?>">Returns</a></li>
						<li><a href="<?php echo esc_url( home_url( '/journal' ) ); ?>">Journal</a></li>
						<li><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQs</a></li>
					</ul>
				<?php } ?>
			</div>

			<div class="footer-col">
				<h4>About</h4>
				<?php if ( has_nav_menu( 'footer-legal' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer-legal',
						'container'      => false,
					) );
				} else { ?>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Our Story</a></li>
						<li><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a></li>
						<li><a href="<?php echo esc_url( home_url( '/terms' ) ); ?>">Terms &amp; Conditions</a></li>
					</ul>
				<?php } ?>
			</div>

		</div>

		<div class="footer-bottom">
			<div>
				&copy; <?php echo date( 'Y' ); ?> Prestige Shoes. All rights reserved.
			</div>
			<div class="payment-methods">
				<span style="font-size: var(--fs-xs); margin-right: 0.5rem;">We accept:</span>
				<span class="payment-pill">Paystack</span>
				<span class="payment-pill">Flutterwave</span>
				<span class="payment-pill">Bank Transfer</span>
			</div>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
