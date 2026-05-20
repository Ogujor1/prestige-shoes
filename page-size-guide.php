<?php
/**
 * Template Name: Size Guide
 *
 * @package Prestige_Shoes
 */

get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="page-hero-inner fade-up">
			<span class="eyebrow"><?php esc_html_e( 'Sizing', 'prestige-shoes' ); ?></span>
			<h1 class="page-hero-title">A size that <em>actually fits.</em></h1>
			<p class="page-hero-sub">A few minutes with a tape measure, and you will never order the wrong size again.</p>
		</div>
	</div>
</section>

<section class="section">
	<div class="container container-narrow">

		<div class="size-intro fade-up">
			<h2>How to measure your foot</h2>
			<ol>
				<li>Place a sheet of A4 paper flat against a wall.</li>
				<li>Stand on the paper, with your heel touching the wall, in the socks you would wear with dress shoes.</li>
				<li>Mark the tip of your longest toe.</li>
				<li>Measure from the wall edge to the mark in centimetres.</li>
				<li>Repeat for the other foot. Use the larger measurement.</li>
			</ol>
			<p class="care-tip"><strong>Measure in the evening.</strong> Feet swell slightly through the day. The evening measurement is your true working size.</p>
		</div>

		<div class="size-table-wrap fade-up">
			<h3>European, UK and US conversion (men)</h3>
			<table class="size-table">
				<thead>
					<tr>
						<th>Foot length (cm)</th>
						<th>EU</th>
						<th>UK</th>
						<th>US</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>24.5</td><td>39</td><td>5.5</td><td>6.5</td></tr>
					<tr><td>25.0</td><td>40</td><td>6</td><td>7</td></tr>
					<tr><td>25.7</td><td>40.5</td><td>6.5</td><td>7.5</td></tr>
					<tr><td>26.0</td><td>41</td><td>7</td><td>8</td></tr>
					<tr><td>26.7</td><td>42</td><td>7.5</td><td>8.5</td></tr>
					<tr><td>27.3</td><td>42.5</td><td>8</td><td>9</td></tr>
					<tr><td>27.9</td><td>43</td><td>8.5</td><td>9.5</td></tr>
					<tr><td>28.6</td><td>44</td><td>9</td><td>10</td></tr>
					<tr><td>29.4</td><td>44.5</td><td>9.5</td><td>10.5</td></tr>
					<tr><td>29.8</td><td>45</td><td>10</td><td>11</td></tr>
					<tr><td>30.5</td><td>46</td><td>11</td><td>12</td></tr>
					<tr><td>31.4</td><td>47</td><td>12</td><td>13</td></tr>
				</tbody>
			</table>
		</div>

		<div class="size-notes fade-up">
			<h3>How our shoes fit</h3>
			<ul>
				<li><strong>Oxfords &amp; Derbies.</strong> Generally true to size. Size down half a size if you are between sizes.</li>
				<li><strong>Loafers &amp; unlined slip-ons.</strong> Size up half a size. Unlined leather softens with wear and the fit will settle.</li>
				<li><strong>Boots.</strong> True to size with a thin sock. Size up half a size if you intend to wear thick winter socks.</li>
				<li><strong>Monk straps.</strong> True to size. The buckle gives you a small range of adjustment around the instep.</li>
			</ul>

			<h3>Width</h3>
			<p>Most of our makers cut to a standard medium width (D or F, depending on the brand). For a wider foot, message us before ordering and we will recommend the makers whose lasts run roomier through the toe box.</p>

			<h3>Still unsure?</h3>
			<p>Send us a photo of your foot on the paper, with the measurement, and we will recommend a size with confidence. WhatsApp our concierge, or write to us through the <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact page</a>.</p>
		</div>

	</div>
</section>

<?php get_footer(); ?>
