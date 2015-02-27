<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-faq.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-home.png" alt=""></div>

	<section class="small-parallax lineup" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>

		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">Get Ready</span></h1>
			</div>
		</div>
	</section>

	<section class="slant lineup">
		<div class="container">
			<h5 class="hued animscroll">This Is How We Celebrate</h5>
<!-- 			<p class="events-blurb animscroll">
			Lorem ipsum Idont know what else goes here random text I type. Lorem ipsum Idont know what else goes here random text I type. Lorem ipsum Idont know what else goes here random text I type.
			Lorem ipsum Idont know what else goes here random text I type. Lorem ipsum Idont know what else goes here random text I type.
				<?php //the_field('main_about_blurb'); ?>
			</p> -->

			<?php 
				$image = get_field('flyer_image');
				$image_url_b = $image['url'];
			?>

			<?php if( get_field('flyer_image') ): ?>
			<img class="events-flyer" src="<?php echo theme_thumb($image_url_b, 1000); ?>" alt="miami beach 100 lineup">
			<?php endif; ?>

			<?php if(get_field('events_list')): ?>

				<ul class="artist-list">
				<?php while(has_sub_field('events_list')): ?>
					<li>
					<?php 
						$image = get_sub_field('artist_image');
						$image_url = $image['url'];
					?>
					<img src="<?php echo theme_thumb($image_url, 297, 194, "c"); ?>" alt="">

					<div class="artist-content">

						<p>
							<span><?php the_sub_field('artist_name'); ?></span>
							<br>
							<?php the_sub_field('artist_bio'); ?>
						</p>

					</div>

					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>