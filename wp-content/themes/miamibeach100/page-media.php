<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-faq.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-home.png" alt=""></div>

	<section class="small-parallax media" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>

		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">Media</span></h1>
			</div>
		</div>
	</section>

	<section class="slant media">
		<div class="container">
			<h5 class="hued animscroll">Videos for Press</h5>

			<p class="download-blurb animscroll">
			Below you will find official press videos and downlaods pertaining to the Miami Beach Centennial.
			</p>

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

			<h5 class="hued animscroll">Downloads</h5>
			<p class="download-blurb animscroll">Click on a package below and you will be propted to save the file on your desktop.</p>

			<?php if(get_field('downloads_list')): ?>
				<ul class="downloads-list animscroll">
				<?php while(has_sub_field('downloads_list')): ?>
					<li>
						<a target="_blank" href="<?php the_sub_field('download_url'); ?>"><?php the_sub_field('download_title'); ?></a>
						<p class="download-link"><?php the_sub_field('download_blurb'); ?></p>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>