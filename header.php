<?php
/**
 * Header template
 *
 * @package Prestige_Shoes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta name="theme-color" content="#0A0A0A">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'prestige-shoes' ); ?></a>

<!-- Announcement bar -->
<div class="announcement-bar">
	<div class="container">
		Free Delivery within Lagos on orders over &#8358;200,000 &nbsp;&nbsp;✦&nbsp;&nbsp; 30 Day Returns &nbsp;&nbsp;✦&nbsp;&nbsp; <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Book a Private Fitting</a>
	</div>
</div>

<!-- Main Header -->
<header class="site-header" role="banner">
	<div class="container">
		<div class="nav-wrap">

			<!-- Logo -->
			<div class="site-brand">
				<?php if ( has_custom_logo() ) {
					the_custom_logo();
				} else { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
						Prestige
						<small>Shoes</small>
					</a>
				<?php } ?>
			</div>

			<!-- Primary nav -->
			<nav class="primary-nav" aria-label="Primary navigation">
				<?php if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '%3$s',
						'depth'          => 2,
					) );
				} else { ?>
					<a href="<?php echo esc_url( home_url( '/shop' ) ); ?>">Collection</a>
					<a href="<?php echo esc_url( home_url( '/shop?orderby=date' ) ); ?>">New Arrivals</a>
					<a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Heritage</a>
					<a href="<?php echo esc_url( home_url( '/journal' ) ); ?>">Journal</a>
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
				<?php } ?>
			</nav>

			<!-- Right actions -->
			<div class="nav-actions">

				<button class="icon-btn" data-toggle-search aria-label="Open search">
					<?php echo prestige_icon( 'search' ); ?>
				</button>

				<a href="<?php echo function_exists( 'wc_get_account_endpoint_url' ) ? esc_url( wc_get_account_endpoint_url( 'dashboard' ) ) : esc_url( wp_login_url() ); ?>" class="icon-btn" aria-label="My account">
					<?php echo prestige_icon( 'user' ); ?>
				</a>

				<button class="icon-btn" data-toggle-cart aria-label="Open cart">
					<?php echo prestige_icon( 'bag' ); ?>
					<span class="cart-count" data-cart-count><?php echo (int) prestige_cart_count(); ?></span>
				</button>

				<button class="mobile-toggle" data-toggle-menu aria-label="Toggle menu" aria-expanded="false">
					<span class="bar"></span>
				</button>

			</div>
		</div>
	</div>
</header>

<!-- Mobile Drawer -->
<aside class="mobile-drawer" aria-label="Mobile navigation">
	<button class="search-close" data-toggle-menu aria-label="Close menu" style="position:absolute;">
		<?php echo prestige_icon( 'close' ); ?>
	</button>
	<?php if ( has_nav_menu( 'mobile' ) ) {
		wp_nav_menu( array(
			'theme_location' => 'mobile',
			'container'      => false,
			'menu_class'     => 'mobile-menu',
		) );
	} else { ?>
		<ul class="mobile-menu">
			<li><a href="<?php echo esc_url( home_url( '/shop' ) ); ?>">All Shoes</a></li>
			<li><a href="<?php echo esc_url( home_url( '/shop/oxfords' ) ); ?>">Oxfords</a></li>
			<li><a href="<?php echo esc_url( home_url( '/shop/derbies' ) ); ?>">Derbies</a></li>
			<li><a href="<?php echo esc_url( home_url( '/shop/loafers' ) ); ?>">Loafers</a></li>
			<li><a href="<?php echo esc_url( home_url( '/shop/monk-straps' ) ); ?>">Monk Straps</a></li>
			<li><a href="<?php echo esc_url( home_url( '/shop/boots' ) ); ?>">Boots</a></li>
			<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Heritage</a></li>
			<li><a href="<?php echo esc_url( home_url( '/journal' ) ); ?>">Journal</a></li>
			<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
		</ul>
	<?php } ?>

	<div class="mobile-drawer-foot">
		<?php $socials = prestige_get_social_links(); ?>
		<div class="social-row">
			<?php if ( ! empty( $socials['instagram'] ) ) : ?>
				<a href="<?php echo esc_url( $socials['instagram'] ); ?>" class="social-icon" target="_blank" rel="noopener">
					<?php echo prestige_icon( 'ig' ); ?>
				</a>
			<?php endif; ?>
			<?php if ( ! empty( $socials['facebook'] ) ) : ?>
				<a href="<?php echo esc_url( $socials['facebook'] ); ?>" class="social-icon" target="_blank" rel="noopener">
					<?php echo prestige_icon( 'fb' ); ?>
				</a>
			<?php endif; ?>
			<?php if ( ! empty( $socials['whatsapp'] ) ) : ?>
				<a href="<?php echo esc_url( $socials['whatsapp'] ); ?>" class="social-icon" target="_blank" rel="noopener">
					<?php echo prestige_icon( 'wa' ); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</aside>

<!-- Search overlay -->
<div class="search-overlay" aria-hidden="true">
	<button class="search-close" data-toggle-search aria-label="Close search">
		<?php echo prestige_icon( 'close' ); ?>
	</button>
	<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php echo prestige_icon( 'search' ); ?>
		<input type="search" name="s" placeholder="Search the collection..." autocomplete="off" data-search-input>
		<?php if ( class_exists( 'WooCommerce' ) ) : ?>
			<input type="hidden" name="post_type" value="product">
		<?php endif; ?>
	</form>
</div>

<!-- Cart Drawer (rendered server-side, populated by AJAX as needed) -->
<aside class="cart-drawer" aria-label="Shopping bag">
	<header class="cart-drawer-head">
		<h3>Your Bag</h3>
		<button class="icon-btn" data-toggle-cart aria-label="Close bag" style="color: var(--charcoal);">
			<?php echo prestige_icon( 'close' ); ?>
		</button>
	</header>
	<div class="cart-drawer-body" data-cart-body>
		<?php if ( function_exists( 'WC' ) && ! WC()->cart->is_empty() ) : ?>
			<?php foreach ( WC()->cart->get_cart() as $key => $item ) :
				$_product = $item['data'];
				if ( ! $_product || ! $_product->exists() || $item['quantity'] <= 0 ) continue;
				$thumb = $_product->get_image( array( 80, 80 ) );
			?>
				<div class="mini-cart-item">
					<?php echo $thumb; ?>
					<div>
						<h4><?php echo esc_html( $_product->get_name() ); ?></h4>
						<small><?php echo esc_html( $item['quantity'] ); ?> &times; <?php echo $_product->get_price_html(); ?></small>
					</div>
					<span class="item-price"><?php echo wc_price( $item['line_total'] ); ?></span>
				</div>
			<?php endforeach; ?>
		<?php else : ?>
			<p style="text-align:center; padding: 3rem 0; color: var(--muted);">Your bag is empty.</p>
		<?php endif; ?>
	</div>
	<footer class="cart-drawer-foot">
		<div class="cart-subtotal">
			<span>Subtotal</span>
			<strong><?php echo function_exists( 'WC' ) ? WC()->cart->get_cart_subtotal() : '&#8358;0'; ?></strong>
		</div>
		<a href="<?php echo function_exists( 'wc_get_cart_url' ) ? esc_url( wc_get_cart_url() ) : '#'; ?>" class="btn btn--outline-dark" style="width:100%; margin-bottom: 0.5rem;">View Bag</a>
		<a href="<?php echo function_exists( 'wc_get_checkout_url' ) ? esc_url( wc_get_checkout_url() ) : '#'; ?>" class="btn btn--primary" style="width:100%;">Checkout</a>
	</footer>
</aside>

<div class="scrim" data-toggle-menu data-close-cart></div>
