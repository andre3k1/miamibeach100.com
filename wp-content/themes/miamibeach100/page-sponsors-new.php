
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

			<?php if(get_field('top_billing')): ?>
				
				<ul class="row first animscroll">
					
 						<?php while(has_sub_field('top_billing')): ?>
							<li class="three">
								<a target="_blank">

									<?php 
										$image = get_sub_field('image');
										$size = 'sponsor-1';
										echo wp_get_attachment_image( $image, $size );
									?>
								</a>
							</li>
		    			<?php endwhile; ?>

	  			</ul>

			<?php endif; ?>

			<?php if(get_field('platinum')): ?>
				
				<ul class="row animscroll">
					
 						<?php while(has_sub_field('platinum')): ?>
							<li class="three">
								<a target="_blank">

									<?php 
										$image = get_sub_field('image');
										$size = 'sponsor-2';
										echo wp_get_attachment_image( $image, $size );
									?>
								</a>
							</li>
		    			<?php endwhile; ?>

	  			</ul>

			<?php endif; ?>

			<?php if(get_field('gold')): ?>
				
				<ul class="row animscroll">
					
 						<?php while(has_sub_field('gold')): ?>
							<li class="five">
								<a target="_blank">

									<?php 
										$image = get_sub_field('image');
										$size = 'sponsor-3';
										echo wp_get_attachment_image( $image, $size );
									?>
								</a>
							</li>
		    			<?php endwhile; ?>

	  			</ul>

			<?php endif; ?>

			<?php if(get_field('silver')): ?>
				
				<ul class="row animscroll">
					
 						<?php while(has_sub_field('silver')): ?>
							<li class="five">
								<a target="_blank">

									<?php 
										$image = get_sub_field('image');
										$size = 'sponsor-3';
										echo wp_get_attachment_image( $image, $size );
									?>
								</a>
							</li>
		    			<?php endwhile; ?>

	  			</ul>

			<?php endif; ?>

			<?php if(get_field('bronze')): ?>
				
				<ul class="row animscroll">
					
 						<?php while(has_sub_field('bronze')): ?>
							<li class="five">
								<a target="_blank">

									<?php 
										$image = get_sub_field('image');
										$size = 'sponsor-3';
										echo wp_get_attachment_image( $image, $size );
									?>
								</a>
							</li>
		    			<?php endwhile; ?>

	  			</ul>

			<?php endif; ?>

			<?php if(get_field('supporting')): ?>
				
				<ul class="row animscroll">
					
 						<?php while(has_sub_field('supporting')): ?>
							<li class="six">
								<a target="_blank">

									<?php 
										$image = get_sub_field('image');
										$size = 'sponsor-4';
										echo wp_get_attachment_image( $image, $size );
									?>
								</a>
							</li>
		    			<?php endwhile; ?>

	  			</ul>

			<?php endif; ?>

			<?php if(get_field('event_partners')): ?>
				
				<ul class="row animscroll">
					
 						<?php while(has_sub_field('event_partners')): ?>
							<li class="six">
								<a target="_blank">

									<?php 
										$image = get_sub_field('image');
										$size = 'sponsor-4';
										echo wp_get_attachment_image( $image, $size );
									?>
								</a>
							</li>
		    			<?php endwhile; ?>

	  			</ul>

			<?php endif; ?>

			<div class="vector-bg-right-small-sponsors" data-stellar-ratio="1.1"></div>

			<div class="sponsor-contact">
				<h1 class="animscroll">Centennial Sponsorship Packages & Site Activation Opportunities</h1>

				<p class="animscroll">
				The City of Miami Beach is pleased to provide unique sponsorship packages for Centennial events in addition to a wide variety of customizable activation opportunities for brands interested in being featured in these historic productions.
				A wide variety of premium branding, promotions, customer engagement, product sampling and lead generation opportunities are available.  Our Centennial Sponsorship team will be pleased to personally work hand-in-hand with your brand to develop specifically customized sponsorship packages upon request.  For more information about Centennial Sponsorships please call (305) 341-7899 or E-Mail: <a href="mailto:sponsorships@miamibeach100.com">sponsorships@miamibeach100.com</a>
				</p>
				<h1 class="animscroll">Mayor Philip Levine Talks Centennial Opportunities</h1>
				<div class="video-holder"><iframe width="560" height="315" src="//www.youtube.com/embed/axtOodcuPlE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
			</div>		

		</div>

	</section>

<?php get_footer(); ?>
