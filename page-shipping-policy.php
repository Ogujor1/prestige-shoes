<?php
/**
 * Template Name: Shipping Policy
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="page-hero-inner fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Delivery', 'prestige-shoes' ); ?></span>
			<h1 class="page-hero-title">Shipping Policy</h1>
			<p class="page-hero-sub">From our salon to your door, with care.</p>
		</div>
	</div>
</section>

<section class="section">
	<div class="container container-narrow">
		<article class="legal-content fade-up">

			<div class="shipping-table">
				<table>
					<thead>
						<tr>
							<th>Destination</th>
							<th>Timeline</th>
							<th>Fee</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Lagos (within mainland and island)</td>
							<td>Same day or next morning</td>
							<td>Free over &#8358;200,000, otherwise &#8358;5,500</td>
						</tr>
						<tr>
							<td>Abuja, Port Harcourt</td>
							<td>1 to 2 business days</td>
							<td>&#8358;5,500 flat</td>
						</tr>
						<tr>
							<td>Other Nigerian cities</td>
							<td>2 to 4 business days</td>
							<td>&#8358;6,500 flat</td>
						</tr>
						<tr>
							<td>International</td>
							<td>5 to 10 business days</td>
							<td>Quoted on request</td>
						</tr>
					</tbody>
				</table>
			</div>

			<h2>How orders are dispatched</h2>
			<p>Each pair is inspected, polished, wrapped in tissue, and placed in its original box. The box is sealed with our wax stamp and dispatched in a discreet outer carrier. Within Lagos, we use a curated last-mile partner. Across Nigeria, we use trusted overnight couriers.</p>

			<h2>Cut-off times</h2>
			<p>Orders placed before 12 noon Lagos time on a working day are processed the same day. Orders placed after that, or on Sundays and public holidays, are processed the next working day.</p>

			<h2>Tracking</h2>
			<p>You will receive a dispatch note with a tracking link by SMS and email. For Lagos same-day deliveries, the rider will call ahead before arrival.</p>

			<h2>Delivery confirmation</h2>
			<p>An adult signature is required on delivery. If no one is available, the rider will reschedule once at no cost. A second failed delivery will incur a re-dispatch fee of &#8358;1,500.</p>

			<h2>International orders</h2>
			<p>International orders are subject to import duties and taxes determined by the destination country. These are payable by the recipient. We will share a customs declaration with the carrier reflecting the true value of the goods.</p>

			<h2>Questions about your delivery?</h2>
			<p>WhatsApp our concierge for an immediate update, or write to <a href="mailto:<?php echo esc_attr( get_theme_mod( 'prestige_email', 'hello@prestigeshoes.ng' ) ); ?>"><?php echo esc_html( get_theme_mod( 'prestige_email', 'hello@prestigeshoes.ng' ) ); ?></a>.</p>

		</article>
	</div>
</section>

<?php get_footer(); ?>
