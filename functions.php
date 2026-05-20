<?php
/**
 * Prestige Shoes Theme functions
 *
 * @package Prestige_Shoes
 * @version 2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'PRESTIGE_VERSION', '2.0.0' );
define( 'PRESTIGE_DIR', get_template_directory() );
define( 'PRESTIGE_URI', get_template_directory_uri() );

/* =========================================================================
   THEME SETUP
   ========================================================================= */
function prestige_setup() {
	load_theme_textdomain( 'prestige-shoes', PRESTIGE_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
		'style',
		'script',
		'navigation-widgets',
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	// WooCommerce
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 800,
		'single_image_width'    => 1200,
		'product_grid'          => array(
			'default_columns' => 3,
			'min_columns'     => 2,
			'max_columns'     => 4,
		),
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	// Custom image sizes for the editorial layout
	add_image_size( 'prestige-hero', 1600, 2000, true );
	add_image_size( 'prestige-card', 800, 800, true );
	add_image_size( 'prestige-card-tall', 800, 1100, true );
	add_image_size( 'prestige-lookbook-wide', 1400, 800, true );
	add_image_size( 'prestige-lookbook-tall', 800, 1200, true );

	// Menus
	register_nav_menus( array(
		'primary'        => __( 'Primary Navigation', 'prestige-shoes' ),
		'mobile'         => __( 'Mobile Navigation', 'prestige-shoes' ),
		'footer-shop'    => __( 'Footer: Shop', 'prestige-shoes' ),
		'footer-care'    => __( 'Footer: Customer Care', 'prestige-shoes' ),
		'footer-legal'   => __( 'Footer: Policies', 'prestige-shoes' ),
	) );
}
add_action( 'after_setup_theme', 'prestige_setup' );

/* =========================================================================
   ENQUEUE ASSETS
   ========================================================================= */
function prestige_assets() {
	// Google Fonts: Cormorant Garamond + Jost
	wp_enqueue_style(
		'prestige-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap',
		array(),
		null
	);

	// Main stylesheet
	wp_enqueue_style(
		'prestige-style',
		get_stylesheet_uri(),
		array( 'prestige-fonts' ),
		PRESTIGE_VERSION
	);

	// Main script
	wp_enqueue_script(
		'prestige-main',
		PRESTIGE_URI . '/assets/js/main.js',
		array(),
		PRESTIGE_VERSION,
		true
	);

	// Pass localised data
	wp_localize_script( 'prestige-main', 'prestigeData', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'prestige-nonce' ),
		'cartUrl' => function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : '',
		'isShop'  => function_exists( 'is_shop' ) ? is_shop() : false,
	) );

	// Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'prestige_assets' );

/* =========================================================================
   WIDGETS / SIDEBARS
   ========================================================================= */
function prestige_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Shop Sidebar', 'prestige-shoes' ),
		'id'            => 'shop-sidebar',
		'description'   => __( 'Filters for the shop archive page.', 'prestige-shoes' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'prestige_widgets_init' );

/* =========================================================================
   HELPERS
   ========================================================================= */

/**
 * Format Naira price with proper symbol
 */
function prestige_format_price( $amount ) {
	if ( function_exists( 'wc_price' ) ) {
		return wc_price( $amount );
	}
	return '&#8358;' . number_format( (float) $amount, 0 );
}

/**
 * Get cart count for header bubble
 */
function prestige_cart_count() {
	if ( function_exists( 'WC' ) && WC()->cart ) {
		return WC()->cart->get_cart_contents_count();
	}
	return 0;
}

/**
 * Inline SVG icons — kept tiny and reusable so no icon font dependency
 */
function prestige_icon( $name, $class = '' ) {
	$icons = array(
		'search'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>',
		'user'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg>',
		'bag'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h14l-1.5 13H6.5L5 7Z"/><path d="M9 10V6a3 3 0 0 1 6 0v4"/></svg>',
		'heart'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-7-4.5-9.5-9.5C.7 7.6 4 4 7.5 4 9.5 4 11 5 12 6.5 13 5 14.5 4 16.5 4 20 4 23.3 7.6 21.5 11.5 19 16.5 12 21 12 21Z"/></svg>',
		'eye'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/></svg>',
		'close'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18M6 6l12 12"/></svg>',
		'arrow'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg>',
		'check'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="m5 12 5 5L20 7"/></svg>',
		'truck'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="13" height="11"/><path d="M15 9h4l3 3v5h-7M7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM18 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/></svg>',
		'shield'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3 4 6v6c0 5 3.5 9 8 10 4.5-1 8-5 8-10V6l-8-3Z"/><path d="m9 12 2 2 4-4"/></svg>',
		'return'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-6.7L3 8"/><path d="M3 4v4h4"/></svg>',
		'leaf'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 4 13C4 7 9 4 21 4c0 12-3 17-9 17h-1Z"/><path d="M4 13c4-4 9-5 13-5"/></svg>',
		'fb'       => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 1 0-11.6 9.9V15h-2.5v-3h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.7l-.4 3h-2.3v6.9A10 10 0 0 0 22 12Z"/></svg>',
		'ig'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/></svg>',
		'wa'       => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.7-.8-2-.9-.3-.1-.5-.1-.6.1-.2.3-.7.9-.9 1-.2.2-.3.2-.6.1-.3-.1-1.2-.5-2.3-1.5-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.1.2-.3.3-.4 0-.2 0-.3-.1-.4 0-.1-.6-1.5-.8-2-.2-.5-.4-.5-.6-.5h-.5c-.2 0-.4 0-.6.3-.2.3-.8.8-.8 2 0 1.2.9 2.4 1 2.5.1.2 1.7 2.6 4.1 3.6 1.4.6 2 .7 2.7.6.4-.1 1.4-.6 1.6-1.1.2-.6.2-1 .1-1.1Z"/><path d="M20.5 3.5A10 10 0 0 0 4 16.7L2.5 22l5.4-1.4A10 10 0 1 0 20.5 3.5Zm-8.4 16.4a8.4 8.4 0 0 1-4.3-1.2l-.3-.2-3.2.8.9-3.1-.2-.3a8.4 8.4 0 1 1 7.1 4Z"/></svg>',
		'pin'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-7 8-13a8 8 0 0 0-16 0c0 6 8 13 8 13Z"/><circle cx="12" cy="9" r="3"/></svg>',
		'phone'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.6a2 2 0 0 1-.5 2.1L8 9.6a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.8.3 1.7.5 2.6.6a2 2 0 0 1 1.7 2Z"/></svg>',
		'mail'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 6 10-6"/></svg>',
		'clock'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>',
	);

	$svg = isset( $icons[ $name ] ) ? $icons[ $name ] : '';
	if ( ! $svg ) {
		return '';
	}
	$class_attr = $class ? ' class="' . esc_attr( $class ) . '"' : '';
	$svg = preg_replace( '/^<svg /', '<svg' . $class_attr . ' aria-hidden="true" focusable="false" ', $svg );
	return $svg;
}

/**
 * Header social links — pulled from customizer
 */
function prestige_get_social_links() {
	return array(
		'facebook'  => get_theme_mod( 'prestige_facebook', '#' ),
		'instagram' => get_theme_mod( 'prestige_instagram', '#' ),
		'whatsapp'  => get_theme_mod( 'prestige_whatsapp', '#' ),
	);
}

/* =========================================================================
   CUSTOMIZER — gives the client a place to set logo, contact, socials
   ========================================================================= */
require_once PRESTIGE_DIR . '/inc/customizer.php';

/* =========================================================================
   WOOCOMMERCE INTEGRATION
   ========================================================================= */
require_once PRESTIGE_DIR . '/inc/woocommerce.php';

/* =========================================================================
   FIRST-RUN AUTO-SETUP — creates pages, menus, settings on activation
   ========================================================================= */
require_once PRESTIGE_DIR . '/inc/auto-setup.php';

/* =========================================================================
   AJAX MINI-CART REFRESH (graceful fallback)
   ========================================================================= */
function prestige_cart_fragments( $fragments ) {
	if ( ! function_exists( 'WC' ) ) {
		return $fragments;
	}
	ob_start();
	?>
	<span class="cart-count" data-cart-count><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
	<?php
	$fragments['span.cart-count'] = ob_get_clean();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'prestige_cart_fragments' );

/* =========================================================================
   CONTACT FORM HANDLER (no plugin dependency)
   ========================================================================= */
function prestige_handle_contact_form() {
	if ( ! isset( $_POST['prestige_contact_nonce'] ) || ! wp_verify_nonce( $_POST['prestige_contact_nonce'], 'prestige-nonce' ) ) {
		wp_send_json_error( array( 'message' => 'Security check failed. Please refresh and try again.' ) );
	}

	$name    = sanitize_text_field( $_POST['name'] ?? '' );
	$email   = sanitize_email( $_POST['email'] ?? '' );
	$phone   = sanitize_text_field( $_POST['phone'] ?? '' );
	$subject = sanitize_text_field( $_POST['subject'] ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );

	if ( ! $name || ! is_email( $email ) || ! $message ) {
		wp_send_json_error( array( 'message' => 'Please fill all required fields with valid information.' ) );
	}

	$to       = get_option( 'admin_email' );
	$site     = get_bloginfo( 'name' );
	$body     = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nSubject: {$subject}\n\nMessage:\n{$message}";
	$headers  = array( 'Reply-To: ' . $name . ' <' . $email . '>' );
	$mail_subject = '[' . $site . '] ' . ( $subject ?: 'New contact enquiry' );

	$sent = wp_mail( $to, $mail_subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => 'Thank you. We will reach out within one business day.' ) );
	} else {
		wp_send_json_error( array( 'message' => 'Could not send right now. Please email us directly.' ) );
	}
}
add_action( 'wp_ajax_prestige_contact', 'prestige_handle_contact_form' );
add_action( 'wp_ajax_nopriv_prestige_contact', 'prestige_handle_contact_form' );

/* =========================================================================
   STRUCTURED DATA — schema.org organisation + SEO defaults
   ========================================================================= */
function prestige_organisation_schema() {
	if ( ! is_front_page() ) {
		return;
	}
	$socials = prestige_get_social_links();
	$schema = array(
		'@context' => 'https://schema.org',
		'@type'    => 'Store',
		'name'     => get_bloginfo( 'name' ),
		'url'      => home_url(),
		'logo'     => function_exists( 'get_custom_logo' ) ? wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) : '',
		'sameAs'   => array_values( array_filter( $socials, fn( $u ) => $u && $u !== '#' ) ),
		'address'  => array(
			'@type'           => 'PostalAddress',
			'addressCountry'  => 'NG',
			'addressLocality' => get_theme_mod( 'prestige_city', 'Lagos' ),
			'streetAddress'   => get_theme_mod( 'prestige_address', '' ),
		),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES ) . '</script>';
}
add_action( 'wp_head', 'prestige_organisation_schema' );

/* =========================================================================
   ADMIN POLISH — better excerpt, body class for state
   ========================================================================= */
function prestige_excerpt_more() { return '&hellip;'; }
add_filter( 'excerpt_more', 'prestige_excerpt_more' );

function prestige_body_class( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'is-home';
	}
	if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
		$classes[] = 'is-shop';
	}
	return $classes;
}
add_filter( 'body_class', 'prestige_body_class' );
