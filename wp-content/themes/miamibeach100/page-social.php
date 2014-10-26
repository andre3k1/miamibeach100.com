<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-home.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-home.png" alt=""></div>

	<section class="main-parallax social" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>
		
		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">Centennial</span></h1>
				<h2 class="name-part subtitle"> Social</h2>
			</div>
		</div>
	</section>

	<section class="slant social">

		<div class="container">
			<h5 class="hued animscroll">Follow Us & Join in on the Fun! <br> #MiamiBeach100</h5>
			<p class="social-blurb blurb animscroll">Miami Beach is non-stop action and new events are happening every day. Keep up with us on Facebook, Twitter, Instagram and more! Let us know about your experience with posts, tweets and photos!  If you need to know more, please contact us too!</p>

			<div class="vector-bg-left-small-social" data-stellar-ratio="1.1"></div>

			<?php echo do_shortcode( '[dc_social_wall id="66"]' ) ?>
		</div>

		<div class="vector-bg-right-small-social" data-stellar-ratio="1.1"></div>

	</section>
	
<?php get_footer(); ?>
