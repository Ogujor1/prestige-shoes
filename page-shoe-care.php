<?php
/**
 * Template Name: Shoe Care Guide
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<section class="page-hero page-hero-care">
	<div class="container">
		<div class="page-hero-inner fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Care guide', 'prestige-shoes' ); ?></span>
			<h1 class="page-hero-title">A shoe well kept <em>is a shoe twice owned.</em></h1>
			<p class="page-hero-sub">Twenty minutes a month, a soft cloth, and a little patience. Your welted pairs will reward you for decades.</p>
		</div>
	</div>
</section>

<section class="section">
	<div class="container container-narrow">

		<div class="care-intro fade-up">
			<p>The construction of a Goodyear-welted shoe is, in essence, a promise. The leather is good for thirty years if you treat it with the respect it deserves. The notes below are how we keep our own pairs, and what we recommend to every Prestige customer who asks.</p>
		</div>

		<div class="care-step fade-up">
			<div class="care-step-num">01</div>
			<div class="care-step-body">
				<h2>The daily ritual</h2>
				<p>After every wear, brush the shoe down with a horsehair brush to lift surface dust before it settles into the grain. Insert cedar shoe trees while the leather is still warm. The trees draw moisture from the calfskin and hold the silhouette as the leather cools.</p>
				<p class="care-tip"><strong>One pair, every other day.</strong> Leather needs at least 24 hours of rest between wearings to release perspiration and recover its shape.</p>
			</div>
		</div>

		<div class="care-step fade-up">
			<div class="care-step-num">02</div>
			<div class="care-step-body">
				<h2>The weekly wipe</h2>
				<p>Once a week, give each pair a quick wipe with a slightly damp cloth to lift any oil or dust the brush has missed. Allow the leather to dry naturally, away from direct heat. A radiator will dry calfskin too quickly and crack it.</p>
			</div>
		</div>

		<div class="care-step fade-up">
			<div class="care-step-num">03</div>
			<div class="care-step-body">
				<h2>The monthly polish</h2>
				<p>Every four to six weeks, depending on rotation, give each pair a full polish.</p>
				<ol>
					<li>Remove the laces. Brush thoroughly.</li>
					<li>Apply a thin coat of cream polish in the matching shade with a soft cloth, working in small circles.</li>
					<li>Allow it to absorb for ten minutes.</li>
					<li>Buff vigorously with a horsehair brush, then with a cotton cloth.</li>
					<li>Replace the laces and admire.</li>
				</ol>
				<p class="care-tip"><strong>For a mirror toe,</strong> follow with a thin layer of paste wax, applied in tiny circles with a damp cloth. Patience here is everything. A high shine takes thirty minutes the first time, less thereafter.</p>
			</div>
		</div>

		<div class="care-step fade-up">
			<div class="care-step-num">04</div>
			<div class="care-step-body">
				<h2>The seasonal condition</h2>
				<p>Twice a year, before the rains and again after, treat the leather with a high-quality conditioner. This replenishes the natural oils lost through wear and weather, and keeps the calfskin supple. We recommend Saphir Renovateur. A pea-sized amount per shoe, no more.</p>
			</div>
		</div>

		<div class="care-step fade-up">
			<div class="care-step-num">05</div>
			<div class="care-step-body">
				<h2>Caught in the rain</h2>
				<p>If your pair is soaked through, do not panic, and do not place them near a heater.</p>
				<ol>
					<li>Wipe off the surface water with a soft cloth.</li>
					<li>Stuff each shoe with newspaper or unprinted paper to absorb internal moisture.</li>
					<li>Allow them to dry in a cool, well-ventilated room for 24 hours.</li>
					<li>Replace the paper with cedar shoe trees.</li>
					<li>Once fully dry, condition the leather lightly before polishing.</li>
				</ol>
			</div>
		</div>

		<div class="care-step fade-up">
			<div class="care-step-num">06</div>
			<div class="care-step-body">
				<h2>The annual check</h2>
				<p>Once a year, examine the welt, the heel and the sole. The welt should remain firm, the heel even, the sole free of cracks. If a sole has worn thin, do not wait for it to break through. A timely resole protects the welt and extends the life of the shoe by another decade. We can arrange resoling on your behalf, returning the pair to the original maker where possible.</p>
			</div>
		</div>

		<div class="care-step fade-up">
			<div class="care-step-num">07</div>
			<div class="care-step-body">
				<h2>Storage</h2>
				<p>Store your pairs upright, on cedar trees, in their original dust bags. Keep them out of direct sunlight, and away from damp wardrobes. If you travel, wrap each shoe in tissue, sole to sole, and place them in their dust bags before packing.</p>
			</div>
		</div>

		<div class="care-cta fade-up">
			<h3>Care kits</h3>
			<p>We curate a small range of brushes, polishes, conditioners and cedar trees from Saphir and Brillare. Available in the salon, or by request.</p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
				<?php esc_html_e( 'Enquire about a care kit', 'prestige-shoes' ); ?>
				<?php echo prestige_icon( 'arrow' ); ?>
			</a>
		</div>

	</div>
</section>

<?php get_footer(); ?>
