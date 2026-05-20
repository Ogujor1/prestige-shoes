<?php
/**
 * Template Name: Contact
 *
 * @package Prestige_Shoes
 */

get_header();

$phone    = get_theme_mod( 'prestige_phone', '+234 800 000 0000' );
$email    = get_theme_mod( 'prestige_email', 'hello@prestigeshoes.ng' );
$whatsapp = get_theme_mod( 'prestige_whatsapp_num', '2348000000000' );
$address  = get_theme_mod( 'prestige_address', 'Plot 14, Bourdillon Road, Ikoyi' );
$city     = get_theme_mod( 'prestige_city', 'Lagos, Nigeria' );
$hours    = get_theme_mod( 'prestige_hours', 'Mon to Sat, 10am to 7pm' );
?>

<section class="page-hero page-hero-contact">
	<div class="container">
		<div class="page-hero-inner fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Contact', 'prestige-shoes' ); ?></span>
			<h1 class="page-hero-title">A quiet conversation, <em>at your convenience.</em></h1>
			<p class="page-hero-sub">Whether you are commissioning a private fitting, tracing an order, or simply curious about the next arrival, we are here to listen.</p>
		</div>
	</div>
</section>

<section class="section section-contact">
	<div class="container">
		<div class="contact-layout">

			<aside class="contact-info fade-up">
				<div class="contact-info-card">
					<span class="contact-info-eyebrow"><?php esc_html_e( 'Atelier', 'prestige-shoes' ); ?></span>
					<h2 class="contact-info-title">Visit us in Ikoyi.</h2>
					<p class="contact-info-text">Step into the salon for a private viewing, a fitting, or a moment with the leather. Appointments are encouraged.</p>

					<ul class="contact-info-list">
						<li>
							<?php echo prestige_icon( 'pin' ); ?>
							<div>
								<span class="contact-info-label"><?php esc_html_e( 'Showroom', 'prestige-shoes' ); ?></span>
								<span class="contact-info-value"><?php echo esc_html( $address ); ?><br><?php echo esc_html( $city ); ?></span>
							</div>
						</li>
						<li>
							<?php echo prestige_icon( 'phone' ); ?>
							<div>
								<span class="contact-info-label"><?php esc_html_e( 'Telephone', 'prestige-shoes' ); ?></span>
								<a class="contact-info-value" href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
							</div>
						</li>
						<li>
							<?php echo prestige_icon( 'mail' ); ?>
							<div>
								<span class="contact-info-label"><?php esc_html_e( 'Email', 'prestige-shoes' ); ?></span>
								<a class="contact-info-value" href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
							</div>
						</li>
						<li>
							<?php echo prestige_icon( 'wa' ); ?>
							<div>
								<span class="contact-info-label"><?php esc_html_e( 'WhatsApp', 'prestige-shoes' ); ?></span>
								<a class="contact-info-value" href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp ) ); ?>" target="_blank" rel="noopener">
									<?php esc_html_e( 'Message us directly', 'prestige-shoes' ); ?>
								</a>
							</div>
						</li>
						<li>
							<?php echo prestige_icon( 'clock' ); ?>
							<div>
								<span class="contact-info-label"><?php esc_html_e( 'Hours', 'prestige-shoes' ); ?></span>
								<span class="contact-info-value"><?php echo esc_html( $hours ); ?></span>
							</div>
						</li>
					</ul>
				</div>

				<div class="contact-info-aside">
					<span class="eyebrow">Concierge</span>
					<p>For corporate gifting, bespoke sizing or private home visits within Lagos, please mark your message <strong>Private Service</strong>. A senior associate will respond within four business hours.</p>
				</div>
			</aside>

			<div class="contact-form-wrap fade-up">
				<form data-contact-form class="contact-form" novalidate>
					<div class="form-row">
						<div class="form-field">
							<label for="cf_name"><?php esc_html_e( 'Your name', 'prestige-shoes' ); ?> *</label>
							<input type="text" id="cf_name" name="name" required />
						</div>
						<div class="form-field">
							<label for="cf_email"><?php esc_html_e( 'Email', 'prestige-shoes' ); ?> *</label>
							<input type="email" id="cf_email" name="email" required />
						</div>
					</div>
					<div class="form-row">
						<div class="form-field">
							<label for="cf_phone"><?php esc_html_e( 'Phone', 'prestige-shoes' ); ?></label>
							<input type="tel" id="cf_phone" name="phone" placeholder="+234..." />
						</div>
						<div class="form-field">
							<label for="cf_subject"><?php esc_html_e( 'Subject', 'prestige-shoes' ); ?></label>
							<select id="cf_subject" name="subject">
								<option><?php esc_html_e( 'General enquiry', 'prestige-shoes' ); ?></option>
								<option><?php esc_html_e( 'Private fitting', 'prestige-shoes' ); ?></option>
								<option><?php esc_html_e( 'Order or shipping', 'prestige-shoes' ); ?></option>
								<option><?php esc_html_e( 'Returns or exchange', 'prestige-shoes' ); ?></option>
								<option><?php esc_html_e( 'Corporate gifting', 'prestige-shoes' ); ?></option>
								<option><?php esc_html_e( 'Press', 'prestige-shoes' ); ?></option>
							</select>
						</div>
					</div>
					<div class="form-field">
						<label for="cf_message"><?php esc_html_e( 'Your message', 'prestige-shoes' ); ?> *</label>
						<textarea id="cf_message" name="message" rows="6" required></textarea>
					</div>
					<div class="form-field form-field-check">
						<input type="checkbox" id="cf_consent" name="consent" required />
						<label for="cf_consent"><?php esc_html_e( 'I agree to the privacy policy and to be contacted regarding my enquiry.', 'prestige-shoes' ); ?></label>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">
							<?php esc_html_e( 'Send message', 'prestige-shoes' ); ?>
							<?php echo prestige_icon( 'arrow' ); ?>
						</button>
						<div class="form-status" role="status" aria-live="polite"></div>
					</div>
				</form>
			</div>

		</div>
	</div>
</section>

<section class="section section-faq-mini">
	<div class="container container-narrow">
		<div class="section-head section-head-center fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Before you write', 'prestige-shoes' ); ?></span>
			<h2 class="section-title">Quick answers, <em>without the wait.</em></h2>
		</div>

		<div class="faq-list fade-up">
			<div class="faq-item">
				<button class="faq-question" type="button">
					<span>How long does delivery take in Lagos?</span>
					<span class="faq-toggle"></span>
				</button>
				<div class="faq-answer">
					<p>Within Lagos, orders placed before noon are typically delivered the same business day or the following morning. Outside Lagos, please allow 2 to 4 business days.</p>
				</div>
			</div>
			<div class="faq-item">
				<button class="faq-question" type="button">
					<span>Are your shoes truly imported?</span>
					<span class="faq-toggle"></span>
				</button>
				<div class="faq-answer">
					<p>Every pair is sourced directly from European and select international makers. Each delivery includes provenance details and an authenticity card.</p>
				</div>
			</div>
			<div class="faq-item">
				<button class="faq-question" type="button">
					<span>Can I exchange a pair if the size is off?</span>
					<span class="faq-toggle"></span>
				</button>
				<div class="faq-answer">
					<p>Yes. Within 30 days, in unworn condition, with the original packaging. We will arrange complimentary collection within Lagos.</p>
				</div>
			</div>
		</div>

		<div style="text-align: center; margin-top: 3rem;" class="fade-up">
			<a class="btn btn-outline" href="<?php echo esc_url( home_url( '/faqs' ) ); ?>">
				<?php esc_html_e( 'See all questions', 'prestige-shoes' ); ?>
				<?php echo prestige_icon( 'arrow' ); ?>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
