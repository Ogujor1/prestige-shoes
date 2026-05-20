<?php
/**
 * Front page template — the luxury showcase
 *
 * @package Prestige_Shoes
 */

get_header();

$hero_eyebrow  = get_theme_mod( 'prestige_hero_eyebrow', 'New Collection' );
$hero_headline = get_theme_mod( 'prestige_hero_headline', 'Exclusively *Imported* For You' );
$hero_sub      = get_theme_mod( 'prestige_hero_sub', 'Hand-selected formal footwear from the world\'s most respected ateliers, delivered to your door in Nigeria.' );
$hero_cta_text = get_theme_mod( 'prestige_hero_cta_text', 'Shop Collection' );
$hero_cta_link = get_theme_mod( 'prestige_hero_cta_link', '/shop/' );
$hero_image_id = get_theme_mod( 'prestige_hero_image' );

/* ============================================================
   Customizer-driven imagery for homepage sections.
   To upload an image: WP Admin > Appearance > Customize > Homepage Imagery.
   If a slot is empty, a stylised gradient placeholder shows in its place.
   ============================================================ */
$cat_oxford_id   = get_theme_mod( 'prestige_cat_oxford_image' );
$cat_derby_id    = get_theme_mod( 'prestige_cat_derby_image' );
$cat_loafer_id   = get_theme_mod( 'prestige_cat_loafer_image' );
$cat_monk_id     = get_theme_mod( 'prestige_cat_monk_image' );
$cat_boot_id     = get_theme_mod( 'prestige_cat_boot_image' );

$heritage_main_id    = get_theme_mod( 'prestige_heritage_main_image' );
$heritage_floater_id = get_theme_mod( 'prestige_heritage_floater_image' );

$lookbook_1_id = get_theme_mod( 'prestige_lookbook_1_image' );
$lookbook_2_id = get_theme_mod( 'prestige_lookbook_2_image' );
$lookbook_3_id = get_theme_mod( 'prestige_lookbook_3_image' );
$lookbook_4_id = get_theme_mod( 'prestige_lookbook_4_image' );
$lookbook_5_id = get_theme_mod( 'prestige_lookbook_5_image' );

$insta_1_id = get_theme_mod( 'prestige_insta_1_image' );
$insta_2_id = get_theme_mod( 'prestige_insta_2_image' );
$insta_3_id = get_theme_mod( 'prestige_insta_3_image' );
$insta_4_id = get_theme_mod( 'prestige_insta_4_image' );
$insta_5_id = get_theme_mod( 'prestige_insta_5_image' );
$insta_6_id = get_theme_mod( 'prestige_insta_6_image' );

/* Whether to show fictional testimonials (default: hidden until real ones added). */
$show_testimonials = get_theme_mod( 'prestige_show_testimonials', false );
?>

<main id="main" class="site-main">

	<!-- =====================================================================
		 HERO
		 ===================================================================== -->
	<section class="hero">
		<div class="container">
			<div class="hero-grid">

				<div class="hero-content fade-up">
					<span class="eyebrow eyebrow--light"><?php echo esc_html( $hero_eyebrow ); ?></span>
					<h1 class="hero-headline"><?php echo prestige_render_headline( $hero_headline ); ?></h1>
					<p class="hero-sub"><?php echo esc_html( $hero_sub ); ?></p>

					<div class="hero-actions">
						<a href="<?php echo esc_url( $hero_cta_link ); ?>" class="btn btn--primary">
							<?php echo esc_html( $hero_cta_text ); ?>
							<?php echo prestige_icon( 'arrow' ); ?>
						</a>
						<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn--ghost">Our Story</a>
					</div>

					<div class="hero-meta">
						<div class="hero-meta-item">
							<span>Hand</span>
							<span>Selected</span>
						</div>
						<div class="hero-meta-item">
							<span>Imported</span>
							<span>Direct</span>
						</div>
						<div class="hero-meta-item">
							<span>Lagos</span>
							<span>Concierge</span>
						</div>
					</div>
				</div>

				<div class="hero-visual fade-up" data-delay="2">
					<?php if ( $hero_image_id ) :
						echo wp_get_attachment_image( $hero_image_id, 'prestige-hero', false, array( 'alt' => 'Prestige Shoes hero', 'class' => 'hero-image' ) );
					else : ?>
						<svg class="hero-svg" viewBox="0 0 600 750" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
							<defs>
								<linearGradient id="bg" x1="0" y1="0" x2="1" y2="1">
									<stop offset="0%" stop-color="#1A1A1A"/>
									<stop offset="100%" stop-color="#0A0A0A"/>
								</linearGradient>
								<radialGradient id="spot" cx="0.5" cy="0.6">
									<stop offset="0%" stop-color="#C9A96E" stop-opacity="0.18"/>
									<stop offset="100%" stop-color="#C9A96E" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="750" fill="url(#bg)"/>
							<rect width="600" height="750" fill="url(#spot)"/>
							<g transform="translate(60, 350)" fill="#C9A96E" opacity="0.92">
								<path d="M0 80 Q5 30 60 20 L260 5 Q360 0 430 25 Q480 45 480 75 L478 110 Q478 135 450 142 L60 165 Q15 165 5 140 Q-5 110 0 80 Z"/>
								<ellipse cx="240" cy="170" rx="220" ry="14" fill="#000" opacity="0.4"/>
							</g>
							<g transform="translate(60, 350)" fill="#0A0A0A">
								<path d="M50 40 L240 25 Q280 22 320 30 L320 50 L240 60 Q140 65 50 60 Z" opacity="0.45"/>
								<circle cx="65" cy="55" r="2" fill="#C9A96E"/>
								<circle cx="120" cy="50" r="2" fill="#C9A96E"/>
								<circle cx="175" cy="48" r="2" fill="#C9A96E"/>
								<circle cx="230" cy="48" r="2" fill="#C9A96E"/>
							</g>
						</svg>
					<?php endif; ?>
				</div>

			</div>
		</div>

		<a href="#categories" class="hero-scroll">Discover</a>
	</section>

	<!-- =====================================================================
		 MARQUEE STRIP
		 ===================================================================== -->
	<div class="marquee" aria-hidden="true">
		<div class="marquee-track">
			<span class="marquee-item">Free Lagos Delivery on orders over &#8358;200,000</span>
			<span class="marquee-item">100% Authentic Imported Brands</span>
			<span class="marquee-item">30-Day Returns &amp; Exchanges</span>
			<span class="marquee-item">New Arrivals Every Month</span>
			<span class="marquee-item">Free Lagos Delivery on orders over &#8358;200,000</span>
			<span class="marquee-item">100% Authentic Imported Brands</span>
			<span class="marquee-item">30-Day Returns &amp; Exchanges</span>
			<span class="marquee-item">New Arrivals Every Month</span>
		</div>
	</div>

	<!-- =====================================================================
		 CATEGORIES SHOWCASE
		 ===================================================================== -->
	<section id="categories" class="section">
		<div class="container">

			<div class="section-head fade-up">
				<span class="eyebrow eyebrow--center">Explore by Style</span>
				<h2>Find Your <em>Signature</em> Pair</h2>
				<p>From the boardroom Oxford to the weekend Loafer, every silhouette earns its place in our collection.</p>
			</div>

			<div class="category-grid category-grid--feature fade-up">

				<a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="category-card tall">
					<?php if ( $cat_oxford_id ) : ?>
						<?php echo wp_get_attachment_image( $cat_oxford_id, 'prestige-card-tall', false, array( 'class' => 'category-card-img', 'alt' => 'Oxfords' ) ); ?>
					<?php else : ?>
						<div class="category-card-bg" style="background: linear-gradient(135deg, #2a2a2a, #0a0a0a);"></div>
					<?php endif; ?>
					<div class="category-card-inner">
						<small>The Classic</small>
						<h3>Oxfords</h3>
						<span class="count">Discover</span>
					</div>
				</a>

				<div style="display: flex; flex-direction: column; gap: var(--space-4);">
					<a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="category-card wide" style="aspect-ratio: 5/4;">
						<?php if ( $cat_derby_id ) : ?>
							<?php echo wp_get_attachment_image( $cat_derby_id, 'prestige-card', false, array( 'class' => 'category-card-img', 'alt' => 'Derbies' ) ); ?>
						<?php else : ?>
							<div class="category-card-bg" style="background: linear-gradient(135deg, #3a3530, #1a1a1a);"></div>
						<?php endif; ?>
						<div class="category-card-inner">
							<small>The Versatile</small>
							<h3>Derbies</h3>
							<span class="count">Discover</span>
						</div>
					</a>
					<a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="category-card wide" style="aspect-ratio: 5/4;">
						<?php if ( $cat_loafer_id ) : ?>
							<?php echo wp_get_attachment_image( $cat_loafer_id, 'prestige-card', false, array( 'class' => 'category-card-img', 'alt' => 'Loafers' ) ); ?>
						<?php else : ?>
							<div class="category-card-bg" style="background: linear-gradient(135deg, #4a3520, #1a0e08);"></div>
						<?php endif; ?>
						<div class="category-card-inner">
							<small>The Sophisticate</small>
							<h3>Loafers</h3>
							<span class="count">Discover</span>
						</div>
					</a>
				</div>

				<div style="display: flex; flex-direction: column; gap: var(--space-4);">
					<a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="category-card wide" style="aspect-ratio: 5/4;">
						<?php if ( $cat_monk_id ) : ?>
							<?php echo wp_get_attachment_image( $cat_monk_id, 'prestige-card', false, array( 'class' => 'category-card-img', 'alt' => 'Monk Straps' ) ); ?>
						<?php else : ?>
							<div class="category-card-bg" style="background: linear-gradient(135deg, #4d3526, #1f1611);"></div>
						<?php endif; ?>
						<div class="category-card-inner">
							<small>The Distinguished</small>
							<h3>Monk Straps</h3>
							<span class="count">Discover</span>
						</div>
					</a>
					<a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="category-card wide" style="aspect-ratio: 5/4;">
						<?php if ( $cat_boot_id ) : ?>
							<?php echo wp_get_attachment_image( $cat_boot_id, 'prestige-card', false, array( 'class' => 'category-card-img', 'alt' => 'Boots' ) ); ?>
						<?php else : ?>
							<div class="category-card-bg" style="background: linear-gradient(135deg, #2c241e, #110e0a);"></div>
						<?php endif; ?>
						<div class="category-card-inner">
							<small>The Bold</small>
							<h3>Boots</h3>
							<span class="count">Discover</span>
						</div>
					</a>
				</div>

			</div>
		</div>
	</section>

	<!-- =====================================================================
		 FEATURED PRODUCTS
		 ===================================================================== -->
	<?php
	$has_featured_products = false;
	if ( class_exists( 'WooCommerce' ) ) {
		$check_loop = new WP_Query( array(
			'post_type'      => 'product',
			'posts_per_page' => 1,
			'tax_query'      => array(
				array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'featured',
				),
			),
		) );
		$has_featured_products = $check_loop->have_posts();
		wp_reset_postdata();
	}
	?>

	<?php if ( $has_featured_products ) : ?>
	<section class="section section--cream">
		<div class="container">

			<div class="section-head fade-up">
				<span class="eyebrow eyebrow--center">Featured</span>
				<h2>This Season's <em>Most Wanted</em></h2>
				<p>The pieces our customers reach for most. Limited stock, hand-finished, individually inspected.</p>
			</div>

			<div class="product-grid fade-up">
				<?php
				$loop = new WP_Query( array(
					'post_type'      => 'product',
					'posts_per_page' => 6,
					'tax_query'      => array(
						array(
							'taxonomy' => 'product_visibility',
							'field'    => 'name',
							'terms'    => 'featured',
						),
					),
				) );

				if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) {
						$loop->the_post();
						wc_get_template_part( 'content', 'product' );
					}
				}
				wp_reset_postdata();
				?>
			</div>

			<div style="text-align: center; margin-top: var(--space-8);">
				<a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn--outline-dark">View Full Collection <?php echo prestige_icon( 'arrow' ); ?></a>
			</div>

		</div>
	</section>
	<?php endif; ?>

	<!-- =====================================================================
		 BRAND VALUES (replaces fake stats)
		 ===================================================================== -->
	<section class="stats-row">
		<div class="container">
			<div class="stats-grid">
				<div class="stat-item fade-up">
					<span class="stat-num" style="font-family: var(--font-serif); font-style: italic;">Hand</span>
					<span class="stat-label">Selected</span>
				</div>
				<div class="stat-item fade-up" data-delay="1">
					<span class="stat-num" style="font-family: var(--font-serif); font-style: italic;">Goodyear</span>
					<span class="stat-label">Welted</span>
				</div>
				<div class="stat-item fade-up" data-delay="2">
					<span class="stat-num" style="font-family: var(--font-serif); font-style: italic;">Full-Grain</span>
					<span class="stat-label">Leather</span>
				</div>
				<div class="stat-item fade-up" data-delay="3">
					<span class="stat-num" style="font-family: var(--font-serif); font-style: italic;">Imported</span>
					<span class="stat-label">Direct</span>
				</div>
			</div>
		</div>
	</section>

	<!-- =====================================================================
		 HERITAGE / STORY
		 ===================================================================== -->
	<section class="heritage">
		<div class="container">
			<div class="heritage-grid">

				<div class="heritage-visual fade-up">
					<div class="img-main">
						<?php if ( $heritage_main_id ) :
							echo wp_get_attachment_image( $heritage_main_id, 'prestige-card-tall', false, array( 'class' => 'heritage-img', 'alt' => 'Heritage' ) );
						else : ?>
							<svg viewBox="0 0 500 660" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" style="width:100%;height:100%;">
								<defs>
									<linearGradient id="hbg" x1="0" y1="0" x2="0" y2="1">
										<stop offset="0%" stop-color="#1A1A1A"/>
										<stop offset="100%" stop-color="#0A0A0A"/>
									</linearGradient>
								</defs>
								<rect width="500" height="660" fill="url(#hbg)"/>
								<g transform="translate(50, 280)" fill="#3D2418">
									<path d="M0 60 Q10 18 65 10 L320 0 Q380 0 410 22 Q428 35 428 58 L426 88 Q426 105 400 110 L50 130 Q15 130 5 105 Q-5 80 0 60Z"/>
								</g>
								<g transform="translate(50, 280)" stroke="#C9A96E" stroke-width="0.8" fill="none" opacity="0.6">
									<path d="M30 30 Q200 22 380 32"/>
									<path d="M30 50 Q200 42 380 52"/>
								</g>
								<text x="50" y="560" font-family="Cormorant Garamond, serif" font-size="26" font-style="italic" fill="#C9A96E">Goodyear Welted</text>
								<text x="50" y="590" font-family="Jost, sans-serif" font-size="11" letter-spacing="2.5" fill="#888">SINCE THE 19TH CENTURY</text>
							</svg>
						<?php endif; ?>
					</div>
					<div class="img-floater">
						<?php if ( $heritage_floater_id ) :
							echo wp_get_attachment_image( $heritage_floater_id, 'prestige-card', false, array( 'class' => 'heritage-img-floater', 'alt' => 'Italian Leather' ) );
						else : ?>
							<svg viewBox="0 0 300 400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" style="width:100%;height:100%;">
								<rect width="300" height="400" fill="#5C3A21"/>
								<g fill="#C9A96E" opacity="0.15">
									<circle cx="60" cy="80" r="30"/>
									<circle cx="220" cy="200" r="50"/>
									<circle cx="80" cy="320" r="20"/>
								</g>
								<text x="30" y="370" font-family="Cormorant Garamond, serif" font-style="italic" font-size="22" fill="#F7F4F0">Italian Leather</text>
							</svg>
						<?php endif; ?>
					</div>
				</div>

				<div class="heritage-content fade-up" data-delay="2">
					<span class="eyebrow">Our Heritage</span>
					<h2>The World's <em>Finest Shoes</em>, here in Nigeria.</h2>
					<p>For too long, the only way to own truly fine footwear was to fly for it. We changed that. Every pair we sell is sourced direct from the workshops that have defined men's elegance for generations, from the cobbled lanes of Northampton to the family ateliers of Almansa.</p>
					<p>What you get: shoes that are made to be repaired, not replaced. Resoled, not retired. The kind of pair you'll mention in your son's wedding speech.</p>

					<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn-link">Read Our Full Story <?php echo prestige_icon( 'arrow' ); ?></a>

					<div class="heritage-points">
						<div class="heritage-point">
							<span class="num">01</span>
							<h4>Hand-Selected</h4>
							<p>Every pair is personally vetted before it earns a place in the collection.</p>
						</div>
						<div class="heritage-point">
							<span class="num">02</span>
							<h4>Goodyear Welted</h4>
							<p>Built to be resoled. The construction that defines a lifetime shoe.</p>
						</div>
						<div class="heritage-point">
							<span class="num">03</span>
							<h4>Full-Grain Leather</h4>
							<p>Only the top grade of European hides. The kind that softens, never wears.</p>
						</div>
						<div class="heritage-point">
							<span class="num">04</span>
							<h4>Imported Direct</h4>
							<p>From the workshop, to our shelves, to your doorstep. No middlemen.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- =====================================================================
		 LOOKBOOK / EDITORIAL
		 ===================================================================== -->
	<section class="lookbook">
		<div class="container">
			<div class="section-head fade-up">
				<span class="eyebrow eyebrow--light eyebrow--center">Lookbook</span>
				<h2>Style, in <em>Three Acts</em></h2>
				<p>From Monday's boardroom to a black-tie evening. Three occasions, three shoes worth showing up in.</p>
			</div>

			<div class="lookbook-grid">

				<div class="lookbook-tile fade-up">
					<?php if ( $lookbook_1_id ) : ?>
						<?php echo wp_get_attachment_image( $lookbook_1_id, 'prestige-card-tall', false, array( 'class' => 'lookbook-img', 'alt' => 'The Boardroom' ) ); ?>
					<?php else : ?>
						<div class="lookbook-tile-bg" style="background: linear-gradient(135deg, #2a2520 0%, #0a0a0a 100%);"></div>
					<?php endif; ?>
					<div class="lookbook-tile-text">
						<small>Act 01</small>
						<h3>The Boardroom</h3>
					</div>
				</div>

				<div class="lookbook-tile fade-up" data-delay="1">
					<?php if ( $lookbook_2_id ) : ?>
						<?php echo wp_get_attachment_image( $lookbook_2_id, 'prestige-card', false, array( 'class' => 'lookbook-img', 'alt' => 'The Wedding' ) ); ?>
					<?php else : ?>
						<div class="lookbook-tile-bg" style="background: linear-gradient(135deg, #3D2418 0%, #1a0e08 100%);"></div>
					<?php endif; ?>
					<div class="lookbook-tile-text">
						<small>Act 02</small>
						<h3>The Wedding</h3>
					</div>
				</div>

				<div class="lookbook-tile fade-up" data-delay="2">
					<?php if ( $lookbook_3_id ) : ?>
						<?php echo wp_get_attachment_image( $lookbook_3_id, 'prestige-card', false, array( 'class' => 'lookbook-img', 'alt' => 'The Gala' ) ); ?>
					<?php else : ?>
						<div class="lookbook-tile-bg" style="background: linear-gradient(135deg, #4a3520 0%, #1f1611 100%);"></div>
					<?php endif; ?>
					<div class="lookbook-tile-text">
						<small>Act 03</small>
						<h3>The Gala</h3>
					</div>
				</div>



			</div>
		</div>
	</section>

	<!-- =====================================================================
		 TESTIMONIALS — hidden by default until real reviews are added.
		 To show, set Customizer > Homepage Testimonials > Show section = on.
		 ===================================================================== -->
	<?php if ( $show_testimonials ) : ?>
	<section class="testimonials">
		<div class="container">
			<div class="section-head fade-up">
				<span class="eyebrow eyebrow--center">In Their Words</span>
				<h2>Loved by <em>Lagos's Finest</em></h2>
			</div>

			<div class="testimonial-grid">

				<div class="testimonial-card fade-up">
					<div class="testimonial-stars">★★★★★</div>
					<blockquote><?php echo wp_kses_post( get_theme_mod( 'prestige_testimonial_1_quote', 'The fit, the finish, the box it arrived in. Everything felt considered.' ) ); ?></blockquote>
					<div class="testimonial-author">
						<div class="testimonial-avatar"><?php echo esc_html( substr( get_theme_mod( 'prestige_testimonial_1_name', 'A B' ), 0, 2 ) ); ?></div>
						<div class="testimonial-author-info">
							<strong><?php echo esc_html( get_theme_mod( 'prestige_testimonial_1_name', 'Customer Name' ) ); ?></strong>
							<small><?php echo esc_html( get_theme_mod( 'prestige_testimonial_1_role', 'Lagos' ) ); ?></small>
						</div>
					</div>
				</div>

				<div class="testimonial-card fade-up" data-delay="1">
					<div class="testimonial-stars">★★★★★</div>
					<blockquote><?php echo wp_kses_post( get_theme_mod( 'prestige_testimonial_2_quote', 'Customer review goes here.' ) ); ?></blockquote>
					<div class="testimonial-author">
						<div class="testimonial-avatar"><?php echo esc_html( substr( get_theme_mod( 'prestige_testimonial_2_name', 'A B' ), 0, 2 ) ); ?></div>
						<div class="testimonial-author-info">
							<strong><?php echo esc_html( get_theme_mod( 'prestige_testimonial_2_name', 'Customer Name' ) ); ?></strong>
							<small><?php echo esc_html( get_theme_mod( 'prestige_testimonial_2_role', 'Lagos' ) ); ?></small>
						</div>
					</div>
				</div>

				<div class="testimonial-card fade-up" data-delay="2">
					<div class="testimonial-stars">★★★★★</div>
					<blockquote><?php echo wp_kses_post( get_theme_mod( 'prestige_testimonial_3_quote', 'Customer review goes here.' ) ); ?></blockquote>
					<div class="testimonial-author">
						<div class="testimonial-avatar"><?php echo esc_html( substr( get_theme_mod( 'prestige_testimonial_3_name', 'A B' ), 0, 2 ) ); ?></div>
						<div class="testimonial-author-info">
							<strong><?php echo esc_html( get_theme_mod( 'prestige_testimonial_3_name', 'Customer Name' ) ); ?></strong>
							<small><?php echo esc_html( get_theme_mod( 'prestige_testimonial_3_role', 'Lagos' ) ); ?></small>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- =====================================================================
		 INSTAGRAM STRIP
		 ===================================================================== -->
	<section class="section section--paper" style="padding-bottom: 0;">
		<div class="container">
			<div class="section-head fade-up">
				<span class="eyebrow eyebrow--center">@PrestigeShoes</span>
				<h2>Tag us in <em>your fit</em></h2>
				<p>Share your Prestige moment. Best photos featured every week.</p>
			</div>
		</div>
		<div class="insta-grid fade-up">
			<?php
			$insta_ids   = array( $insta_1_id, $insta_2_id, $insta_3_id, $insta_4_id, $insta_5_id, $insta_6_id );
			$insta_link  = prestige_get_social_links()['instagram'] ?: '#';
			$placeholder_colors = array( '#3D2418', '#5C3A21', '#0A0A0A', '#1A1A1A', '#2A2A2A', '#3a3530' );

			foreach ( $insta_ids as $i => $id ) : ?>
				<a href="<?php echo esc_url( $insta_link ); ?>" class="insta-tile" target="_blank" rel="noopener">
					<?php if ( $id ) : ?>
						<?php echo wp_get_attachment_image( $id, 'prestige-card', false, array( 'class' => 'insta-img', 'alt' => 'Instagram' ) ); ?>
					<?php else : ?>
						<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" style="width:100%;height:100%;">
							<rect width="200" height="200" fill="<?php echo esc_attr( $placeholder_colors[ $i ] ); ?>"/>
							<g transform="translate(40, 90)" fill="#C9A96E" opacity="0.85">
								<path d="M0 28 Q3 9 30 6 L120 2 Q150 2 165 14 Q175 21 175 30 L174 45 Q174 53 158 56 L25 62 Q5 62 2 53 Q-2 42 0 28Z"/>
							</g>
						</svg>
					<?php endif; ?>
				</a>
			<?php endforeach; ?>
		</div>
	</section>

	<!-- =====================================================================
		 TRUST BADGES
		 ===================================================================== -->
	<section class="trust-strip">
		<div class="container">
			<div class="trust-grid">
				<div class="trust-item">
					<?php echo prestige_icon( 'truck' ); ?>
					<h4>Free Lagos Delivery</h4>
					<p>On orders over &#8358;200,000</p>
				</div>
				<div class="trust-item">
					<?php echo prestige_icon( 'shield' ); ?>
					<h4>Authenticity Guaranteed</h4>
					<p>Every pair, sourced direct</p>
				</div>
				<div class="trust-item">
					<?php echo prestige_icon( 'return' ); ?>
					<h4>30-Day Returns</h4>
					<p>Easy, no-questions returns</p>
				</div>
				<div class="trust-item">
					<?php echo prestige_icon( 'phone' ); ?>
					<h4>Personal Concierge</h4>
					<p>WhatsApp us 7 days a week</p>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
