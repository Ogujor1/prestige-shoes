<?php
/**
 * The template for displaying 404 pages
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<section class="error-section">
	<div class="container">
		<div class="error-inner fade-up">
			<span class="error-code">404</span>
			<h1 class="error-title">A step in the wrong direction.</h1>
			<p class="error-sub">The page you are looking for has wandered off. Perhaps it slipped under the workbench. Let us help you find your way back to something refined.</p>
			<div class="error-actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'Return home', 'prestige-shoes' ); ?>
				</a>
				<?php if ( class_exists( 'WooCommerce' ) ) : ?>
					<a class="btn btn-outline" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">
						<?php esc_html_e( 'Browse the collection', 'prestige-shoes' ); ?>
					</a>
				<?php endif; ?>
			</div>

			<form class="error-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<label class="screen-reader-text" for="error-search-field"><?php esc_html_e( 'Search', 'prestige-shoes' ); ?></label>
				<input type="search" id="error-search-field" name="s" placeholder="<?php esc_attr_e( 'Search the store', 'prestige-shoes' ); ?>" />
				<button type="submit" class="btn btn-dark">
					<?php esc_html_e( 'Search', 'prestige-shoes' ); ?>
				</button>
			</form>
		</div>
	</div>
</section>

<?php get_footer(); ?>
