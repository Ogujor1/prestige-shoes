<?php
/**
 * The template for displaying single posts
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>

		<section class="page-hero">
			<div class="container">
				<div class="page-hero-inner fade-up">
					<span class="eyebrow"><?php echo esc_html( get_the_date() ); ?></span>
					<h1 class="page-hero-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</section>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="container fade-up">
				<div class="single-post-media">
					<?php the_post_thumbnail( 'prestige-lookbook-wide' ); ?>
				</div>
			</div>
		<?php endif; ?>

		<section class="section">
			<div class="container container-narrow">
				<div class="single-post-content fade-up">
					<?php the_content(); ?>
				</div>

				<?php if ( has_tag() ) : ?>
					<div class="single-post-tags">
						<?php the_tags( '<span class="tag-label">' . esc_html__( 'Tagged:', 'prestige-shoes' ) . '</span> ', ', ' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</section>

	</article>

<?php endwhile; ?>

<?php get_footer(); ?>
