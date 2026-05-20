<?php
/**
 * The template for displaying all pages
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<section class="page-hero">
		<div class="container">
			<div class="page-hero-inner fade-up">
				<span class="eyebrow"><?php bloginfo( 'name' ); ?></span>
				<h1 class="page-hero-title"><?php the_title(); ?></h1>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container container-narrow">
			<article class="page-content fade-up">
				<?php the_content(); ?>
			</article>
		</div>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
