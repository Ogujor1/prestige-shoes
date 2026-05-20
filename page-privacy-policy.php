<?php
/**
 * Template Name: Privacy Policy
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="page-hero-inner fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Legal', 'prestige-shoes' ); ?></span>
			<h1 class="page-hero-title">Privacy Policy</h1>
			<p class="page-hero-sub">Plainly written. Last updated <?php echo esc_html( date_i18n( 'F Y' ) ); ?>.</p>
		</div>
	</div>
</section>

<section class="section">
	<div class="container container-narrow">
		<article class="legal-content fade-up">

			<h2>1. Who we are</h2>
			<p>Prestige Shoes is a curator and retailer of fine men&rsquo;s footwear, registered and operating in Lagos, Nigeria. References to &ldquo;we&rdquo;, &ldquo;us&rdquo; or &ldquo;our&rdquo; in this policy refer to Prestige Shoes.</p>

			<h2>2. What this policy covers</h2>
			<p>This policy explains how we collect, use, store and protect your personal information when you visit our website, place an order, contact us, or visit our salon.</p>

			<h2>3. Information we collect</h2>
			<p>We collect only what we need in order to serve you well. This includes:</p>
			<ul>
				<li><strong>Account &amp; order details:</strong> name, email, phone number, delivery address, billing address.</li>
				<li><strong>Payment information:</strong> processed by our payment partners (Paystack, Flutterwave). We do not store your card details on our servers.</li>
				<li><strong>Communication:</strong> messages, emails, WhatsApp conversations and call records relating to your enquiries.</li>
				<li><strong>Browsing data:</strong> pages viewed, time on site, device type, IP address, where permitted by your browser settings.</li>
			</ul>

			<h2>4. How we use your information</h2>
			<ul>
				<li>To process and deliver your orders.</li>
				<li>To respond to enquiries and provide aftercare.</li>
				<li>To send order updates, delivery notifications and receipts.</li>
				<li>With your express consent, to share insider notes and new arrivals.</li>
				<li>To improve our website, salon experience and service quality.</li>
				<li>To meet our legal and tax obligations.</li>
			</ul>

			<h2>5. Sharing your information</h2>
			<p>We do not sell your personal data. We share information only with:</p>
			<ul>
				<li>Payment processors who handle your transaction.</li>
				<li>Logistics partners who deliver your order.</li>
				<li>Service providers (hosting, analytics, customer support tools) bound by confidentiality.</li>
				<li>Law enforcement, where legally required.</li>
			</ul>

			<h2>6. Your rights</h2>
			<p>Under Nigerian data protection law, including the Nigeria Data Protection Act 2023, you have the right to:</p>
			<ul>
				<li>Access the personal data we hold about you.</li>
				<li>Correct inaccurate information.</li>
				<li>Request deletion of your personal data, subject to our legal obligations.</li>
				<li>Object to direct marketing at any time.</li>
				<li>Withdraw consent for non-essential processing.</li>
			</ul>

			<h2>7. How long we keep your data</h2>
			<p>Order records are retained for at least seven years to satisfy tax and accounting requirements. Marketing data is held only while you remain subscribed. Other records are kept for as long as necessary to provide the service you requested.</p>

			<h2>8. Cookies</h2>
			<p>Our site uses essential cookies to operate the cart and account areas, and analytical cookies to understand how the site is used. You may disable non-essential cookies in your browser at any time. Our full cookie usage notice is included in our <a href="<?php echo esc_url( home_url( '/terms' ) ); ?>">Terms &amp; Conditions</a>.</p>

			<h2>9. Security</h2>
			<p>We use industry-standard encryption (HTTPS), trusted payment processors, and access controls to protect your information. No system is perfectly secure, but we work hard to keep yours so.</p>

			<h2>10. Changes to this policy</h2>
			<p>We may update this policy from time to time. We will publish the new version on this page with a revised &ldquo;last updated&rdquo; date. Material changes will be notified by email where possible.</p>

			<h2>11. How to contact us</h2>
			<p>For any privacy enquiry, please write to <a href="mailto:<?php echo esc_attr( get_theme_mod( 'prestige_email', 'hello@prestigeshoes.ng' ) ); ?>"><?php echo esc_html( get_theme_mod( 'prestige_email', 'hello@prestigeshoes.ng' ) ); ?></a> with the subject line <strong>Privacy</strong>. We respond within seven working days.</p>

		</article>
	</div>
</section>

<?php get_footer(); ?>
