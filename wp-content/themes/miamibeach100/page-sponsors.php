<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-blog-sponsors.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-blog-sponsors.png" alt=""></div>

	<section class="main-parallax sponsors" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>
		
		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">Thank you</span></h1>
				<h2 class="name-part animLeft">for your continuous</h2>
				<h1 class="name-part subtitle">Support</h1>
			</div>
		</div>
	</section>

	<section class="slant sponsors">

		<div class="container">

			<div class="vector-bg-left-small-sponsors" data-stellar-ratio="1.1"></div>

			<h1 class="animscroll">Official Centennial Sponsors</h1>

			<?php if(get_field('top_banner_sponsors')): ?>
				
				<ul class="row animscroll">
					
						<?php while(has_sub_field('top_banner_sponsors')): ?>
							<li>
								<a href="<?php the_sub_field('url'); ?>" target="_blank">

									<?php 

										$image = get_sub_field('image');
										$size = 'sponsor-banner';
										echo wp_get_attachment_image( $image, $size );

									?>
								</a>
							</li>
		    			<?php endwhile; ?>

	  			</ul>

			<?php endif; ?>

			<h1 class="animscroll">Cultural Sponsors</h1>

			<?php if(get_field('sqaure_sponsors')): ?>

				<ul class="tile-grid animscroll">

					<?php while(has_sub_field('sqaure_sponsors')): ?>
						<li>
							<a href="<?php the_sub_field('url'); ?>">

								<?php 

									$image = get_sub_field('image');
									$size = 'sponsor-sqaure';
									echo wp_get_attachment_image( $image, $size );

								?>
							<p class="thumb-link"><?php the_sub_field('sponsor_name'); ?></p></a>
						</li>
	    			<?php endwhile; ?>

	  			</ul>

			<?php endif; ?>

			<div class="vector-bg-right-small-sponsors" data-stellar-ratio="1.1"></div>

		</div>

	</section>

<?php get_footer(); ?>
