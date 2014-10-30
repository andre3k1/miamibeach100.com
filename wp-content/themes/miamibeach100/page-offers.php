<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-blog-sponsors.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-blog-sponsors.png" alt=""></div>

	<section class="main-parallax blog" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>
		
		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">Our Offers</span><span class="name-part other">,</span></h1>
				<h2 class="name-part subtitle">for the latest</h2>
			</div>
		</div>
	</section>




	<section class="slant blog">

		<div class="container">
			<div class="vector-bg-left-small-sponsors" data-stellar-ratio="1.1"></div>

			<?php 
				$temp = $wp_query; 
				$wp_query = null; 
				$wp_query = new WP_Query(); 
				$wp_query->query('showposts=10&post_type=offers'.'&paged='.$paged); 

				while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>

			<article>
				<h3 class="blog-title"><a class="permalink" href="<?php get_field('url'); ?>"><?php the_title(); ?></a></h3>
					<ul class="meta-title">
						<li>posted on <?php echo get_the_date(); ?></li></span>
					</ul>
					<div class="loop-content">
						<?php 

							$image = get_field('offer_image');
							$size = 'blog-thumb';
							echo wp_get_attachment_image( $image, $size );

						?>
						<p><?php echo get_field('offer_description'); ?></p>
						<p><a class="back-to-blog" href="<?php the_permalink(); ?>" class="read-more">View This Offer <i class="fa fa-angle-right"></i></a></p>
					</div>
			</article>

			<?php endwhile; ?>

			<div class="blog-navigation-page">
				<?php previous_posts_link('&laquo; Previous') ?>
				<?php next_posts_link('Next &raquo;') ?>
			</div>

			<?php 
				$wp_query = null; 
				$wp_query = $temp;  // Reset
			?>

			<div class="vector-bg-right-small-sponsors" data-stellar-ratio="1.1"></div>

		</div> <!-- End of container -->

	</section>

<?php get_footer(); ?>