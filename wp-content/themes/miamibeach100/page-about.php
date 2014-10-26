<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-about.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-about.png" alt=""></div>

	<section class="main-parallax about" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>

		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">Discover</span></h1>
					<h2 class="name-part subtitle"> our History</h2>
			</div>
		</div>
	</section>

	<section class="slant about">
		<div class="container">
			<h5 class="hued animscroll">We Celebrate <br> Our History &amp; Our Future</h5>
			<p class="about-blurb blurb animscroll"><?php the_field('main_about_blurb'); ?></p>
		</div>
	</section>
	
	<section class="sub-parallax-legend" data-stellar-background-ratio="0.9"></section>

<?php get_footer("slanted"); ?>