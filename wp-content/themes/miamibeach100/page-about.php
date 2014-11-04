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
					<iframe width="940" height="528" src="//www.youtube.com/embed/hSfShtnJPiw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					<p class="video-credit">Video Produced by <a target="_blank" href="http://www.actproductions.com/">ACT Productions</a></p>
					<div class="vector-about-video-right" data-stellar-ratio="1.1"></div>
				</div>
		</div>
	</section>	

	<section class="slant legend">
		<div class="container">
			<h5 class="hued animscroll">Miami Beach. How it all began.</h5>
		</div>


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
								$random = rand();

							?>

							<div class="mask">
								<a href="#about-popup-<?php the_sub_field('year'); echo $random; ?>" class="lightbox" data-lightbox-type="inline"><h2><?php the_sub_field('year'); ?></h2></a>
							</div>
						</div>

						<!-- lightbox -->
						<div id="about-popup-<?php the_sub_field('year'); echo $random; ?>" class="about-popup" style="display: none;">
							<h5 class="hued"><?php the_sub_field('year'); ?></h5>
							<p><?php the_sub_field('blurb'); ?></p>
						</div>

    				</li>

    			<?php endwhile; ?>

  				</ul>

		<?php endif; ?>			

			<p class="instruct">Use the scroller to travel in the time.</p>	
		</div>

		<div class="container">
			<p class="credit">
				Text and captions were provided by Miami Beach’s City Historian, Professor Seth H. Bramson. In his capacity as City Historian, Professor Bramson gives talks on the history of Miami Beach to service clubs, fraternal organizations, churches, temples and other interested groups at no charge. He can be reached via email at sbramson@bellsouth.net.
				<br><br>
				All images are from and courtesy of The Bramson Archive. Comments or questions regarding the images should be addressed to: Professor Seth H. Bramson/Office of the City Manager/1700 Convention Center Drive/Miami Beach, FL 33139.
			</p>
		</div>

	</section>	
	
	<section class="sub-parallax-legend" data-stellar-background-ratio="0.9"></section>

<?php get_footer("slanted"); ?>