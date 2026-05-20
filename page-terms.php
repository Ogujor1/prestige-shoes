<?php
/**
 * Template Name: Terms &amp; Conditions
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="page-hero-inner fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Legal', 'prestige-shoes' ); ?></span>
			<h1 class="page-hero-title">Terms &amp; Conditions</h1>
			<p class="page-hero-sub">Last updated <?php echo esc_html( date_i18n( 'F Y' ) ); ?>.</p>
		</div>
	</div>
</section>

<section class="section">
	<div class="container container-narrow">
		<article class="legal-content fade-up">

			<h2>1. Welcome</h2>
			<p>These terms govern your use of the Prestige Shoes website and your purchase of any goods from us. By browsing or ordering, you agree to them. If you do not, please refrain from using the site.</p>

			<h2>2. Eligibility</h2>
			<p>You must be at least 18 years old to place an order. All purchases are subject to acceptance and availability.</p>

			<h2>3. Products</h2>
			<p>We make every effort to display colour, leather grain and finish accurately, but on-screen rendering may vary slightly from the physical pair. The shoe you receive is always the genuine article from the named maker.</p>

			<h2>4. Pricing</h2>
			<p>All prices are quoted in Nigerian Naira (&#8358;) and inclusive of applicable taxes. We reserve the right to correct pricing errors before an order is dispatched. Where a clear pricing error has been made, we will contact you to confirm whether you wish to proceed at the corrected price or cancel.</p>

			<h2>5. Orders &amp; payment</h2>
			<p>Your order is a contract once payment has been received and confirmed. Payments are processed by Paystack, Flutterwave or by approved bank transfer. We do not retain your full card details.</p>

			<h2>6. Delivery</h2>
			<p>Delivery timelines are estimates based on our logistics partners. We are not responsible for delays caused by weather, traffic, security incidents or other events beyond our control. See our <a href="<?php echo esc_url( home_url( '/shipping-policy' ) ); ?>">Shipping Policy</a> for detail.</p>

			<h2>7. Returns &amp; exchanges</h2>
			<p>We accept returns and exchanges within 30 days of delivery, in unworn condition, with the original packaging and authenticity card. See our <a href="<?php echo esc_url( home_url( '/refund-policy' ) ); ?>">Refund Policy</a> for full terms.</p>

			<h2>8. Care &amp; warranty</h2>
			<p>Each Goodyear-welted pair carries a one-year manufacturing warranty against genuine defects in normal wear. The warranty does not cover damage caused by neglect, water saturation, contact with corrosive substances, or wear inconsistent with the intended use of the shoe.</p>

			<h2>9. Intellectual property</h2>
			<p>All content on this website, including photographs, copy, illustrations and the Prestige Shoes name and marks, is the property of Prestige Shoes or its licensors. You may not reproduce or republish any part of it without our written consent.</p>

			<h2>10. Cookies &amp; site data</h2>
			<p>Our website uses cookies and similar technologies to operate essential functions (such as your cart and login session), to remember your preferences, and to help us understand how the site is used. Essential cookies cannot be turned off. Analytics and marketing cookies are optional and can be disabled in your browser settings at any time.</p>
			<p>We rely on a small number of trusted third parties for payments, hosting and analytics. We do not share your personal data with advertising networks. Disabling essential cookies will prevent the cart and checkout from functioning correctly.</p>

			<h2>11. Limitation of liability</h2>
			<p>To the fullest extent permitted by Nigerian law, our liability for any single order shall not exceed the value of that order. We are not liable for any indirect, incidental or consequential losses.</p>

			<h2>12. Governing law</h2>
			<p>These terms are governed by the laws of the Federal Republic of Nigeria. Any dispute that cannot be settled amicably shall be resolved by the courts of Lagos State.</p>

			<h2>13. Contact</h2>
			<p>For any question regarding these terms, please write to <a href="mailto:<?php echo esc_attr( get_theme_mod( 'prestige_email', 'hello@prestigeshoes.ng' ) ); ?>"><?php echo esc_html( get_theme_mod( 'prestige_email', 'hello@prestigeshoes.ng' ) ); ?></a>.</p>

		</article>
	</div>
</section>

<?php get_footer(); ?>
