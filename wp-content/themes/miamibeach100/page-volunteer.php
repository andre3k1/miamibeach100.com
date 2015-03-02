<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-faq.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-home.png" alt=""></div>

	<section class="small-parallax volunteer" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>

		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">Volunteer</span></h1>
			</div>
		</div>
	</section>

	<section class="slant volunteer">
		<div class="container">
			<h5 class="hued animscroll">I want to help!</h5>

			<p class="volunteer-blurb animscroll">
				Miami Beach Centennial Volunteer Pre-Application. Full registration will begin in March 1, 2015. We will notify you based on the contact information given. 
			</p>

			<div class="form-contact animscroll">
				<?php echo do_shortcode('[contact-form-7 id="2722" title="Volunteer Form"]') ?>
			</div>

			<?php if(get_field('video_list')): ?>
				<ul class="video-list animscroll">
				<?php while(has_sub_field('video_list')): ?>
					<li>
						<p class="video-title"><?php the_sub_field('video_title'); ?></p>
						<div class="video-holder">
							<iframe width="940" height="528" src="//www.youtube.com/embed/<?php the_sub_field('youtube_id'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							<?php if( get_sub_field('download_url') ): ?>
							<a target="_blank" href="<?php the_sub_field('download_url'); ?>" class="btn">Download Video</a>
							<?php endif; ?>
						</div>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>