<?php
/**
 * Search form template
 *
 * @package Prestige_Shoes
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="s"><?php esc_html_e( 'Search the store', 'prestige-shoes' ); ?></label>
	<div class="search-form-inner">
		<?php echo prestige_icon( 'search' ); ?>
		<input type="search" id="s" name="s" placeholder="<?php esc_attr_e( 'Search Oxfords, Loafers, Boots...', 'prestige-shoes' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" />
		<button type="submit" class="btn btn-dark">
			<?php esc_html_e( 'Search', 'prestige-shoes' ); ?>
		</button>
	</div>
</form>
