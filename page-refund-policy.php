<?php
/**
 * Template Name: Refund Policy
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="page-hero-inner fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Returns', 'prestige-shoes' ); ?></span>
			<h1 class="page-hero-title">Refund &amp; Returns Policy</h1>
			<p class="page-hero-sub">Thirty days, unworn, beautifully packed. We make returns simple, because we want you to buy with confidence.</p>
		</div>
	</div>
</section>

<section class="section">
	<div class="container container-narrow">
		<article class="legal-content fade-up">

			<h2>The 30-day promise</h2>
			<p>If a pair is not right, you have 30 days from the date of delivery to return or exchange it. The shoe must be in unworn condition, with the original box, dust bag and authenticity card. We respectfully decline returns where the shoe shows wear.</p>

			<h2>How to return a pair</h2>
			<ol>
				<li>Email us at <a href="mailto:<?php echo esc_attr( get_theme_mod( 'prestige_email', 'hello@prestigeshoes.ng' ) ); ?>"><?php echo esc_html( get_theme_mod( 'prestige_email', 'hello@prestigeshoes.ng' ) ); ?></a> or send a WhatsApp message with your order number and the reason for return.</li>
				<li>We will arrange complimentary collection within Lagos. Outside Lagos, we will share return shipping instructions.</li>
				<li>Once the pair is inspected and approved, your refund or exchange is processed.</li>
			</ol>

			<h2>Refund timing</h2>
			<p>Refunds are issued to the original payment method within 5 working days of the return passing inspection. Please allow your bank an additional 1 to 3 business days to settle the credit.</p>

			<h2>Exchanges</h2>
			<p>Where the requested replacement is in stock, we dispatch it within one business day of inspection. If the size or model is unavailable, we will offer a full refund or store credit at your preference.</p>

			<h2>Faulty or incorrect items</h2>
			<p>If a shoe arrives with a manufacturing defect, or you receive the wrong pair, we apologise sincerely. Please contact us within 7 days of delivery. We will arrange immediate collection and replacement at our cost. The one-year manufacturing warranty applies to faults arising in normal wear after this initial period.</p>

			<h2>Exclusions</h2>
			<p>We are unable to accept returns on:</p>
			<ul>
				<li>Worn shoes that show creasing, scuffs or sole wear.</li>
				<li>Shoe care products once opened.</li>
				<li>Items returned without the original packaging and authenticity card.</li>
				<li>Final-sale or made-to-order items, where the listing has stated this clearly.</li>
			</ul>

			<h2>Damaged in transit</h2>
			<p>Please inspect your delivery on arrival. If the box or shoe arrives visibly damaged, refuse the delivery where possible and contact us at once. Photographs taken at the moment of delivery help us settle any claim quickly.</p>

			<h2>Need help?</h2>
			<p>Our concierge is on WhatsApp during showroom hours and replies to email within four business hours. Please <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">write to us</a> if anything is unclear.</p>

		</article>
	</div>
</section>

<?php get_footer(); ?>
