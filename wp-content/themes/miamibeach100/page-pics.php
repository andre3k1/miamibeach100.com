
<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-pics-social.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-pics-social.png" alt=""></div>

	<section class="main-parallax pics" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>
		
		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">See</span></h1>
				<h2 class="name-part subtitle"> all the highlights</h2>
			</div>
		</div>
	</section>

	<section class="slant pics">

		<div class="container">
			
			<h5 class="hued animscroll">The Present will be History --<br> so be a part of it!</h5>
			<div class="vector-bg-right-small" data-stellar-ratio="1.1"></div>

			<ul class="tile-grid animscroll">

				<?php 
					$temp = $wp_query; 
					$wp_query = null; 
					$wp_query = new WP_Query(); 
					$wp_query->query('post_type=pics'.'&paged='.$paged); 

					while ($wp_query->have_posts()) : $wp_query->the_post(); 
				?>	

				<li>
					<div class="view view-one">

						<?php 
							$images = get_field('event_images');
							$thumb = $images[0];
						?>

						<?php  if( $images ): ?>												

						<img src="<?php echo $thumb['sizes']['sponsor-sqaure']; ?>" alt="<?php echo $image['alt']; ?>" />						

						<div class="mask">
							<a href="<?php echo $thumb['url']; ?>" class="lightbox" data-lightbox-gallery="events-gallery-<?php echo $row['event_name'];?>"><h2>View Album</h2></a>
						</div>

						<ul style="display:none;">
						<?php 
							$head = array_shift($images);
							foreach( $images as $image ): ?>
							<li><a href="<?php echo $image['url']; ?>" class="lightbox" data-lightbox-gallery="events-gallery-<?php echo $row['event_name'];?>"></a></li>
						<?php endforeach; ?>

						</ul>

						<?php endif; ?>

					</div>
					<p class="thumb-link"><?php the_title(); ?></p><p class="calendar"><?php echo get_field('event_date');?></p>

				</li>

				<?php endwhile; ?>

				<?php 
					$wp_query = null; 
					$wp_query = $temp;  // Reset
				?>				

  				</ul>

			<div class="vector-bg-left-small-pics" data-stellar-ratio="1.1"></div>

<!-- 			<div class="blog-navigation">
				<ul>
					<li><a href="#" class="prev"><i class="fa fa-angle-left"></i></a></li>
					<li><a href="#" class="numberPage">1</a></li>
					<li><a href="#" class="numberPage">2</a></li>
					<li><a href="#" class="numberPage">3</a></li>
					<li><a href="#" class="next"><i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div> -->

		</div>

	</section>

<?php get_footer(); ?>