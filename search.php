<?php
/**
 * Search results template
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="page-hero-inner fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Search', 'prestige-shoes' ); ?></span>
			<h1 class="page-hero-title">
				<?php
				/* translators: %s: search query */
				printf( esc_html__( 'Results for %s', 'prestige-shoes' ), '<em>&ldquo;' . esc_html( get_search_query() ) . '&rdquo;</em>' );
				?>
			</h1>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="search-results-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'search-result-card fade-up' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="search-result-media" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'prestige-card' ); ?>
							</a>
						<?php endif; ?>
						<div class="search-result-body">
							<span class="search-result-type"><?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?></span>
							<h2 class="search-result-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p class="search-result-excerpt"><?php echo wp_kses_post( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<div class="pagination-wrap">
				<?php
				the_posts_pagination(
					array(
						'mid_size'  => 2,
						'prev_text' => '&larr; ' . esc_html__( 'Previous', 'prestige-shoes' ),
						'next_text' => esc_html__( 'Next', 'prestige-shoes' ) . ' &rarr;',
					)
				);
				?>
			</div>
		<?php else : ?>
			<div class="empty-state">
				<h2><?php esc_html_e( 'No matches found.', 'prestige-shoes' ); ?></h2>
				<p><?php esc_html_e( 'Try a different keyword, or explore our curated collection.', 'prestige-shoes' ); ?></p>

				<form class="error-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label class="screen-reader-text" for="search-field"><?php esc_html_e( 'Search', 'prestige-shoes' ); ?></label>
					<input type="search" id="search-field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Try another search', 'prestige-shoes' ); ?>" />
					<button type="submit" class="btn btn-dark"><?php esc_html_e( 'Search', 'prestige-shoes' ); ?></button>
				</form>

				<div style="margin-top: 2rem;">
					<a class="btn btn-outline" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php esc_html_e( 'Back to home', 'prestige-shoes' ); ?>
					</a>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
