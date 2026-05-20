<?php
/**
 * The main template file
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="page-hero-inner fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Journal', 'prestige-shoes' ); ?></span>
			<h1 class="page-hero-title">
				<?php
				if ( is_home() ) {
					esc_html_e( 'Notes on craft, care and quiet style.', 'prestige-shoes' );
				} elseif ( is_archive() ) {
					the_archive_title();
				} elseif ( is_search() ) {
					/* translators: %s: search query */
					printf( esc_html__( 'Results for %s', 'prestige-shoes' ), '<em>' . get_search_query() . '</em>' );
				} else {
					esc_html_e( 'The Prestige Journal', 'prestige-shoes' );
				}
				?>
			</h1>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="post-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card fade-up' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="post-card-media" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'prestige-card-tall' ); ?>
							</a>
						<?php endif; ?>
						<div class="post-card-body">
							<span class="post-card-meta"><?php echo esc_html( get_the_date() ); ?></span>
							<h2 class="post-card-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p class="post-card-excerpt"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
							<a class="link-arrow" href="<?php the_permalink(); ?>">
								<?php esc_html_e( 'Read more', 'prestige-shoes' ); ?>
								<?php echo prestige_icon( 'arrow' ); ?>
							</a>
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
				<h2><?php esc_html_e( 'Nothing here, yet.', 'prestige-shoes' ); ?></h2>
				<p><?php esc_html_e( 'Try a different search, or return to the collection.', 'prestige-shoes' ); ?></p>
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'Back to home', 'prestige-shoes' ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
