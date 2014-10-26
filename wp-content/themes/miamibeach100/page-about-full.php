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

	<section class="about-video">
		<div class="vector-about-video" data-stellar-ratio="1.1"><img src="<?php //echo get_template_directory_uri(); ?>/img/vector-about-video.png" alt=""></div>
		<div class="container">
			<h5 class="hued animscroll">See what the Centennial is all about!</h5>
				<div class="video-holder animscroll">
					<iframe src="http://player.vimeo.com/video/89562162" width="940" height="528" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<div class="vector-about-video-right" data-stellar-ratio="1.1"></div>
				</div>
		</div>
	</section>

	<section class="slant legend">
		<div class="container">
			<h5 class="hued animscroll">Miami Beach. Now it all began.</h5>
			<p class="legend-blurb animscroll"><?php the_field('scroller_blurb'); ?></div>


		<?php if(get_field('history_scroller')): ?>

			<div class="scroll-pane horizontal-slider">
				<ul class="slides">

				<?php while(has_sub_field('history_scroller')): ?>
					<li>
						<div class="view view-one">

							<?php 

								$image = get_sub_field('image');
								$size = 'history-scroller-thumb';
								echo wp_get_attachment_image( $image, $size );

							?>

							<div class="mask">
								<a href="#about-popup-<?php the_sub_field('year'); ?>" class="lightbox" data-lightbox-type="inline"><h2><?php the_sub_field('year'); ?></h2></a>
							</div>
						</div>

						<!-- lightbox -->
						<div id="about-popup-<?php the_sub_field('year'); ?>" class="about-popup" style="display: none;">
							<h5 class="hued"><?php the_sub_field('year'); ?></h5>
							<p><?php the_sub_field('blurb'); ?></p>
						</div>

    				</li>

    			<?php endwhile; ?>

  				</ul>

		<?php endif; ?>			

			<p class="instruct">Use the scroller to travel in the time.</p>	
		</div>

	</section>
	
	<section class="sub-parallax-legend" data-stellar-background-ratio="0.9"></section>

<?php get_footer("slanted"); ?>